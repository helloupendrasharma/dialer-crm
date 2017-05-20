<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_user_table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_email_id' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_contact_number' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_date_of_birth' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_profile_picture' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_role' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'user_active' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'default' => 0,
                                'null' => FALSE
                        ),
                        'user_added_date' => array(
                                'type' => 'TIMESTAMP',
                                'null' => FALSE
                        ),
                        'user_removed_date' => array(
                                'type' => 'TIMESTAMP',
                                'null' => FALSE
                        ),
                        'user_active' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'default' => 0,
                                'null' => FALSE
                        )
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('crm_user');
        }

        public function down()
        {
                $this->dbforge->drop_table('crm_user');
        }
}