<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel
{
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A e-mail is required'
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'Please supply a valid e-mail address'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This e-mail is already in use'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 255),
                'message' => 'E-mail must be smaller than 255 characters long'
            )
        ),
        'first_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'First name is required'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 45),
                'message' => 'First name must be smaller than 45 characters long'
            )
        ),
        'last_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Last name is required'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 45),
                'message' => 'Last name must be smaller than 45 characters long'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            ),
            'minLength' => array(
                'rule' => array('minLength', 6),
                'message' => 'Password must be larger than 6 characters long'
            )
        )
    );

    public $virtualFields = array(
        'full_name' => 'TRIM(CONCAT(User.first_name, " ", User.last_name))'
    );

    public function beforeValidate($options = array())
    {
        $this->data[$this->alias]['role'] = 'user';
    }

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();

            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }

        return true;
    }
}