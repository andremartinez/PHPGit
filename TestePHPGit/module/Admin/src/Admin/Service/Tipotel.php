<?php

namespace Admin\Service;

use Base\Entity\Tipotel as TipotelEntity;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLotacatorInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Tipotel implements ServiceLocatorAwareInterface{
	
	protected $serviceLocator;
	
	protected $entityManager;

	public function getServiceLocator(){
		return $this->serviceLocator;
	}
	
	public function setServiceLocator(ServiceLocatorInterface $serviceLocator){
		$this->serviceLocator = $serviceLocator;
	}
	
	public function getEntityManager(){
		if(!$this->entityManager)
			$this->entityManager = $this->getServiceLocator()->get('EntityManager');
		return $this->entityManager;
	}
	
	public function setEntityManager($em){
		$this->entityManager= $em;
	}
	
	public function insert($descricao){
		$em =$this->getEntityManager();
		/* var $em \Doctrine\ORM\EntityManager */
		$tipotel = new TipotelEntity($descricao);
		
		$em->persist($tipotel);
		$em->flush();
		
		
	}	
	
	public function delete($id){
		
	}
	
	public function update($id,$descricao){
		
	}
}