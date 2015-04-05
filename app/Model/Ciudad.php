<?php
App::uses('AppModel', 'Model');
/**
 * Ciudad Model
 *
 */
class Ciudad extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ciudad';
	public $useTable = 'ciudades';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ciudad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
