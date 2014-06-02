<?php

namespace Base\Entity;

use Doctrine\ORM\EntityRepository;

class TipotelRepository extends EntityRepository{
	public function finByDescricao($descricao){
		return $this->findBy(array('descricao'=>$descricao, array('descricao'=>'asc')));
		
	}
	
}