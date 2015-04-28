<?php
App::uses('AppModel', 'Model');
/**
 * Contact Model
 *
 * @property employeur $id_employeur
 */
class Contact extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'prenom';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employeur' => array(
			'className' => 'Employeur',
			'foreignKey' => 'id_employeur',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
