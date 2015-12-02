<?php
App::uses('AppModel', 'Model');

class Conversation extends AppModel
{
	public $belongsTo = array(
		'Object' => array(
			'className' => 'Objects'
		),
		'User1' => array(
			'className'  => 'User',
			'foreignKey' => 'user_1_id'
		),
		'User2' => array(
			'className'  => 'User',
			'foreignKey' => 'user_2_id'
		)
	);

	public $hasMany = array(
		'Message'
	);

	public function objectExists($objectId = null)
	{
		$this->Objects->id = $objectId;

        return $this->Objects->exists();
	}

	public function getConversations($userId = null)
	{
		return $this->find('all', array(
			'conditions' => array(
				'OR' => array(
					array('user_1_id' => $userId),
					array('user_2_id' => $userId)
				)
			),
			'contain' => array(
				'Message',
				'User1'  => array('first_name', 'last_name'),
				'User2'  => array('first_name', 'last_name'),
				'Object' => array('name')
			)
		));
	}
}