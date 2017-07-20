<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;
class HomeController extends AppController
{
    public function index()
    {

        $in = $this->request->getData('theTitle');
        $connection = ConnectionManager::get('default');

/*
        //create users table
        $createTable = $this->table('users');
        $createTable
            ->addPrimaryKey('id', 'int', [
                'limit' => 11,
                'unsigned' => true,
                'NOT NULL' => true,
                'AUTO_INCREMENT' => true
            ])
            ->addColumn('username', 'varchar', [
                'limit' => 45,
                'NOT NULL' => true,
            ])
            ->addColumn('password', 'varchar', [
                'limit' => 45,
                'NOT NULL' => true
            ])
            ->addColumn('email', 'varchar', [
                'limit' => 45,
                'NOT NULL' => true
            ])
            ->create();
        //setting component
        // $components = array('Auth');

        $validator = new Validator();
        // makesure the each field is written
        $validator ->requirePresence('r_username')
            ->notEmpty('r_username', 'Please fill this field')
            ->requirePresence('r_password')
            ->notEmpty('r_password', 'Please fill this field')
            ->requirePresence('r_email')
            ->notEmpty('r_email', 'Please fill this field');

        if (isset($this->request->data['register-submit'])) {

            $username = $this->request->data('r_usernaem');
            $password = $this->request->data('r_password');
            $hpassword = password_hash($password, PASSWORD_DEFAULT);
            $email = $this->request->data('r_email');

            $this->save('users', [
                'username' => '$username',
                'password' => '$hpassword',
                'email' => '$email']);


        } else if ($this->request->data('r_password') != $this->request->data('r_confirm-password')) {
            $errorMessage = 'You need to same password in comfirm';
        }

*/


    }



}

    

