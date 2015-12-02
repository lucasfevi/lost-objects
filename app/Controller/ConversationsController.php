<?php
App::uses('AppController', 'Controller');

class ConversationsController extends AppController
{
    public function create($objectId = null)
    {
        if (!$this->Conversation->objectExists($objectId)) {
            throw new NotFoundException(__('Invalid object'));
        }

        if ($this->request->is('post')) {
            $this->Conversation->create();

            $this->request->data['Conversation']['object_id'] = $objectId;
            $this->request->data['Conversation']['user_1_id'] = $this->Conversation->Objects->getUserId($objectId);
            $this->request->data['Conversation']['user_2_id'] = $this->Session->read('Auth.User.id');
            $this->request->data['Message'][0]['user_id']     = $this->Session->read('Auth.User.id');

            if ($this->Conversation->saveAll($this->request->data)) {
                return $this->redirect(array('action' => 'view'));
            }
        }

        $this->set('info', $this->Conversation->Objects->getUserAndObjectInfo($objectId));
        $this->set('title', 'Start Conversation');
    }


    public function view()
    {
        // print('<pre>');
        // print_r($this->Conversation->getConversations($this->Session->read('Auth.User.id')));
        // print('</pre>'); die;
        $this->set('conversations', $this->Conversation->getConversations($this->Session->read('Auth.User.id')));
        $this->set('title', 'Messages');
    }
}