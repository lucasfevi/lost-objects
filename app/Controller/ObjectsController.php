<?php
App::uses('AppController', 'Controller');

class ObjectsController extends AppController
{
	public $uses = array('Objects');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('search');
    }

	public function add()
	{
		if ($this->request->is('post')) {
            $this->Objects->create();

            if ($this->Objects->save($this->request->data)) {
                return $this->redirect(array('controller' => 'users', 'action' => 'profile'));
            }

            $this->set('errors', $this->Objects->validationErrors);
        }

        $this->set('categories', $this->Objects->getCategories());
		$this->set('title', 'Add object found or lost');
	}

	public function edit($id = null)
    {
        $this->Objects->id = $id;

        if (!$this->Objects->exists()) {
            throw new NotFoundException(__('Invalid object'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Objects->save($this->request->data)) {
                return $this->redirect(array('controller' => 'users', 'action' => 'profile'));
            }

            $this->set('errors', $this->Objects->validationErrors);
        } else {
            $this->request->data = $this->Objects->findById($id);
        }

        $this->set('categories', $this->Objects->getCategories());
		$this->set('title', 'Edit object');
    }

    public function delete($id = null)
    {
        $this->Objects->id = $id;

        if (!$this->Objects->exists()) {
            throw new NotFoundException(__('Invalid object'));
        }

        $this->Objects->delete();

        return $this->redirect(array('controller' => 'users', 'action' => 'profile'));
    }

    public function search()
    {
        if (!$this->request->is('post')) {
            return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
        }

        $this->set('objects', $this->Objects->getObjects($this->request->data));
        $this->set('title', 'Results');
    }
}