<?php
namespace PgBase;


return array(
	'doctrine' => array(
			'eventmanager' => array(
					'orm_default' => array(
						'subscribers' => array(
							'\PgBase\Doctrine\Utf8Subscriber'
						)		
					
					)
			), 
			'connection' => array(
					'orm_default' => array(							
						'doctrine_type_mappings'=>array('inet'=>'string',
														'point'=>'point')
					)
			),
			'configuration' =>      array(
					'orm_default' => array(
						'types' => array('point'=>'\PgBase\Types\PointType'),
					),
			)
				
	),		
);