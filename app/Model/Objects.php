<?php
App::uses('AppModel', 'Model');

class Objects extends AppModel
{
	public $validate = array(
		'name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A name is required'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 45),
                'message' => 'The name must be smaller than 45 characters long'
            )
        ),
        'description' => array(
        	'required' => array(
                'rule' => 'notBlank',
                'message' => 'A description is required'
            )
        ),
        'type' => array(
        	'required' => array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => 'Select between lost or found'
            )
        ),
        'category_id' => array(
        	'required' => array(
                'rule' => 'notBlank',
                'message' => 'Select a category'
            )
        )
	);

    public function beforeValidate($options = array())
    {
        if (!isset($this->data[$this->alias]['status'])) {
            $this->data[$this->alias]['status'] = 'searching';
        }

        if (!isset($this->data[$this->alias]['user_id'])) {
            $this->data[$this->alias]['user_id'] = CakeSession::read('Auth.User.id');
        }
    }
}