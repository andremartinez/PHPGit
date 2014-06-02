<?php
namespace PgBase\Doctrine;

use Doctrine\Common\EventSubscriber as EventSubscriberDoctrine,
	Doctrine\DBAL\Events,
	Doctrine\ORM\Event\LifecycleEventArgs,
	Doctrine\DBAL\Event\ConnectionEventArgs;

class Utf8Subscriber implements EventSubscriberDoctrine {
	function getSubscribedEvents() {
		return array (Events::postConnect);
	}
	
	public function postConnect(ConnectionEventArgs $args) {
		$args->getConnection()->exec('SET NAMES \'UTF8\'');		
	}
	
} 