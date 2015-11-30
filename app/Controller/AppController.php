<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $components = array(
        'Flash',
        'Auth' => array(
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email'),
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
}
