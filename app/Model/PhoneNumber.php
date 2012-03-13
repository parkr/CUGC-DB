<?php
App::uses('AppModel', 'Model');
/**
 * PhoneNumber Model
 *
 * @property Member $Member
 */
class PhoneNumber extends AppModel {
	
	public function beforeSave() {
		if(isset($this->data[$this->alias]['phone_number'])){
			$num = $this->data[$this->alias]['phone_number'];
			$num = preg_replace('/(-|_| |\+|\(|\)|\.)+/', "", $num);
			$this->data[$this->alias]['phone_number'] = $num;
		}
		return true;
	}
	
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'phone_number';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'member_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
