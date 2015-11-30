<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $components = array(
        'Flash',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email')
                )
            )
        )
    );
}
