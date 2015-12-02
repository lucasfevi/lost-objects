<?php
App::uses('AppModel', 'Model');

class Message extends AppModel
{
	public $belongsTo = array(
		'Conversation',
		'User'
	);
}