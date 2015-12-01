<?php
App::uses('AppController', 'Controller');

class MessagesController extends AppController
{
	public $uses = array('Objects', 'Message');

	public function send($objectId = null)
	{
		$this->Objects->id = $objectId;
        if (!$this->Objects->exists()) {
            throw new NotFoundException(__('Invalid object'));
        }

		if ($this->request->is('post')) {
            $this->Message->create();

            $this->request->data['Message']['object_id']   = $objectId;
            $this->request->data['Message']['receiver_id'] = $this->Objects->getUserId($objectId);
            $this->request->data['Message']['sender_id']   = $this->Session->read('Auth.User.id');

            if ($this->Message->save($this->request->data)) {
                return $this->redirect(array('controller' => 'users', 'action' => 'view', 'userId' => CakeSession::read('Auth.User.id')));
            }
        }

		$this->set('info', $this->Objects->getUserAndObjectInfo($objectId));
		$this->set('title', 'Send Message');
	}
}