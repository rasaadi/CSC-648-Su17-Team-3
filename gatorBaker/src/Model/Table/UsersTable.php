<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/19
 * Time: 6:48
 */
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Controller\Component\AuthComponent;


class test_userTable extends Table
{



    public function validationDefault(Validator $validator)
    {


        return $validator
            ->notEmpty('password', 'A password is required')
            ->notEmpty('email', 'An email is required');

    }

}