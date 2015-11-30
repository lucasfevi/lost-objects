<?php
App::uses('AppController', 'Controller');

class ObjectsController extends AppController
{
	public $uses = array('Objects');

	public function add()
	{
		if ($this->request->is('post')) {
            $this->Objects->create();

            if ($this->Objects->save($this->request->data)) {
                $this->Flash->success(__('Your account has been created'), array('key' => 'success'));
                return $this->redirect(array('controller' => 'users', 'action' => 'view', 'userId' => CakeSession::read('Auth.User.id')));
            }

            $this->set('errors', $this->Objects->validationErrors);
        }

		$this->set('title', 'Add object found or lost');
	}
}