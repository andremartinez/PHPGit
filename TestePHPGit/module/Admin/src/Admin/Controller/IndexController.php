<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
   //	$em = $this->getServiceLocator()->get('EntityManager');
   // 	var_dump($em);die;
   	/* @var $em \Doctrine\ORM\EntityManager */
   // $tipotelRepo = $em->getRepository('Base\Entity\Tipotel');
    /* @var $tipotelRepo \Base\Entity\TipotelReposiroty */
   // $tipotels = $tipotelRepo->findByDescricao('Celular');
   // var_dump($tipotels);die;
    //    return new ViewModel();
    	$tipoTelService = $this->getServiceLocator()->get('Admin\Service\Tipotel');
    	$tipoTelService->insert('Comercial');
    	echo 'ok'; die;
    }
}