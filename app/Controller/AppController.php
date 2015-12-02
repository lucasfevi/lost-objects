<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $components = array(
        'Flash',
        'Session',
        'Auth' => array(
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'home'
            ),
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'profile'
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
