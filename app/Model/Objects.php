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

	public $belongsTo = array(
		'User',
		'Category'
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

    public function getCategories()
    {
    	return $this->Category->find('list');
    }

    public function getObjects($searchTerm = null)
    {
        return $this->find('all', array(
            'conditions' => array(
                'OR' => array(
                    array('Objects.name LIKE' => '%' . $searchTerm . '%'),
                    array('Objects.description' => '%' . $searchTerm . '%')
                )
            )
        ));
    }

    public function getUserAndObjectInfo($objectId = null)
    {
        $object = $this->find('first', array(
            'conditions' => array(
                'Objects.id' => $objectId
            ),
            'recursive' => 0
        ));

        return array(
            'objectName' => $object['Objects']['name'],
            'userName'   => $object['User']['full_name']
        );
    }

    public function getUserId($objectId)
    {
        $object = $this->findById($objectId);

        return $object['Objects']['id'];
    }
}