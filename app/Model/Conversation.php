<?php
App::uses('AppModel', 'Model');

class Conversation extends AppModel
{
	public $belongsTo = array(
		'Objects' => array(
			'foreignKey' => 'object_id'
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
		$conversations = $this->find('all', array(
			'conditions' => array(
				'OR' => array(
					array('user_1_id' => $userId),
					array('user_2_id' => $userId)
				)
			),
			'contain' => array(
				'Message',
				'User1'   => array('first_name', 'last_name'),
				'User2'   => array('first_name', 'last_name'),
				'Objects' => array('name')
			)
		));

		return $this->fixUserName($conversations);
	}

	private function fixUserName($conversations = array())
	{
		foreach ($conversations as $key => $conversation)
		{
			if (CakeSession::read('Auth.User.id') == $conversation['Conversation']['user_1_id']) {
				$conversations[$key]['Conversation']['name'] = trim($conversation['User2']['first_name'] . ' ' . $conversation['User2']['last_name']);
			} else {
				$conversations[$key]['Conversation']['name'] = trim($conversation['User1']['first_name'] . ' ' . $conversation['User1']['last_name']);
			}
		}

		return $conversations;
	}
}