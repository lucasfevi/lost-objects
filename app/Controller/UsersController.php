<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login', 'view');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error(__('Invalid username or password, try again'), array('key' => 'error'));
        }

        $this->set('title', 'Sign In');
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function profile()
    {
        $this->set('user', $this->User->findById($this->Session->read('Auth.User.id')));
        $this->set('found_objects', $this->User->getFoundObjects($this->Session->read('Auth.User.id')));
        $this->set('lost_objects', $this->User->getLostObjects($this->Session->read('Auth.User.id')));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Your account has been created'), array('key' => 'success'));
                return $this->redirect(array('action' => 'add'));
            }

            $this->set('errors', $this->User->validationErrors);
        }

        $this->set('title', 'Sign Up');
    }
}