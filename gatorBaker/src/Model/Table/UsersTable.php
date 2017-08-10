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

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
       
            return $validator
            ->notEmpty('password', 'A password is required')
            ->add('password', [
                'length' => [
                    'rule' => ['lengthBetween', 4,15],
                    'message' => 'Password need to be between 4 to 15 characters',
                ],
                'compare' => [
                    'rule' => ['compareWith', 'confirm_password']
                ]
            ])
            ->notEmpty('email', 'An email is required')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Your email address has been registered'])
            ->notEmpty('confirm_password', 'You need to input password again')
            ->add('confirm_password', [
                'length' => [
                    'rule' => ['lengthBetween', 4,15],
                    'message' => 'Password need to be between 4 to 15 characters',
                ]
            ])
             ->requirePresence('accept_terms')
            ->notEmpty('accept_terms', 'You must agree to the terms', 'create');

    }

}
