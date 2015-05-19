<?php
App::uses('AppModel', 'Model');
/**
 * Employeur Model
 *
 * @property employeur $id_employeur
 */
class Employeur extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nom_entreprise';
	public $order = 'nom_entreprise';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */ 
	public $hasMany = array(
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'id_employeur',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
