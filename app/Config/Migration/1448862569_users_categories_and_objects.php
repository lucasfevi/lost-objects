<?php
class UsersCategoriesAndObjects extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
    public $description = 'users_categories_and_objects';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'categories' => array(
                    'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
                    'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                ),
                'objects' => array(
                    'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
                    'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'latitude' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'longitude' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
                    'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                        'fk_objects_users_idx' => array('column' => 'user_id', 'unique' => 0),
                        'fk_objects_categories1_idx' => array('column' => 'category_id', 'unique' => 0),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                ),
                'users' => array(
                    'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
                    'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'role' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
                    'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                        'email_UNIQUE' => array('column' => 'email', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array(
                'objects', 'categories', 'users'
            ),
        ),
    );

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
    public function before($direction) {
        return true;
    }

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
    public function after($direction) {
        $User = ClassRegistry::init('User');
        $Category = ClassRegistry::init('Category');
        $Objects = ClassRegistry::init('Objects');

        if ($direction === 'up') {
            // Create 2 users
            $data = array(
                array(
                    'first_name' => 'Lucas',
                    'last_name'  => 'Vieira',
                    'email'      => 'newlucasfevi@gmail.com',
                    'password'   => 'lost123',
                    'role'       => 'admin'
                ),
                array(
                    'first_name' => 'User',
                    'last_name'  => 'Test',
                    'email'      => 'ldacruz@ilstu.edu',
                    'password'   => 'lost123',
                    'role'       => 'user'
                )
            );
            $User->create();
            if ($User->saveAll($data)) {
                $this->callback->out('users created');
            }

            // Populates categories table
            $data = array(
                array('name' => 'Cell Phone'),
                array('name' => 'Wallet'),
                array('name' => 'Credit Card'),
                array('name' => 'Sunglasses'),
                array('name' => 'Headphones'),
                array('name' => 'Bicycle'),
                array('name' => 'Shopping Bag'),
                array('name' => 'Other'),
            );
            $Category->create();
            if ($Category->saveAll($data)) {
                $this->callback->out('categories table populated');
            }

            // Populates objects table
            $data = array(
                array(
                    'name'        => 'iPhone 6s',
                    'description' => 'Lost him in Rec center',
                    'type'        => 'lost',
                    'status'      => 'searching',
                    'latitude'    => '40.5078608927256',
                    'longitude'   => '-88.99402141571045',
                    'user_id'     => 1,
                    'category_id' => 1
                ),
                array(
                    'name'        => 'Wallet',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at molestie erat. Mauris interdum lacus tortor, gravida tempus nunc commodo vitae. Aenean fermentum velit dui, sed laoreet mauris pellentesque dignissim. Nullam vitae ultricies lacus, non hendrerit ante. Sed ut odio urna. Maecenas sodales, lacus a scelerisque tempor, tellus ipsum sollicitudin justo, ut consequat justo leo convallis risus. Morbi blandit ipsum ante, ut venenatis libero ultrices lacinia.',
                    'type'        => 'lost',
                    'status'      => 'searching',
                    'latitude'    => '42.5078608927256',
                    'longitude'   => '-88.99402141571045',
                    'user_id'     => 1,
                    'category_id' => 1
                ),
                array(
                    'name'        => 'My Dog',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at molestie erat. Mauris interdum lacus tortor, gravida tempus nunc commodo vitae. Aenean fermentum velit dui, sed laoreet mauris pellentesque dignissim. Nullam vitae ultricies lacus, non hendrerit ante. Sed ut odio urna. Maecenas sodales, lacus a scelerisque tempor, tellus ipsum sollicitudin justo, ut consequat justo leo convallis risus. Morbi blandit ipsum ante, ut venenatis libero ultrices lacinia.',
                    'type'        => 'lost',
                    'status'      => 'searching',
                    'latitude'    => '42.5078608927256',
                    'longitude'   => '-88.99402141571045',
                    'user_id'     => 1,
                    'category_id' => 8
                )
            );

            $Objects->create();
            if ($Objects->saveAll($data)) {
                $this->callback->out('objects table populated');
            }
        }

        return true;
    }
}
