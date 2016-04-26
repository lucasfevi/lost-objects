<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org).
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 *
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
class DATABASE_CONFIG
{
    public function __construct()
    {
        $this->default = $this->getDefaultDatabase();

        $this->test = array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'login' => 'user',
            'password' => 'password',
            'database' => 'test_database_name',
            'prefix' => '',
        );
    }

    private function getDefaultDatabase()
    {
        $clearDBUrl = getenv('CLEARDB_DATABASE_URL');

        if ($clearDBUrl) {
            $url = parse_url($clearDBUrl);

            return array(
                'datasource' => 'Database/Mysql',
                'persistent' => false,
                'host' => $url['host'],
                'login' => $url['user'],
                'password' => $url['pass'],
                'database' => substr($url['path'], 1),
                'prefix' => '',
            );
        }

        return array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'login' => 'root',
            'password' => 'root',
            'database' => 'lostobjects',
            'prefix' => '',
        );
    }
}
