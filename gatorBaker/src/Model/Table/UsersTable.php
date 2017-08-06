<?php

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
                    'rule' => ['lengthBetween', 4, 15],
                ]
            ])
            ->add('password', [
                'compare' => [
                    'rule' => ['compareWith', 'confirm_password'],
                    'message' => 'Comfirm password should be same password',
                ]
            ])
            ->notEmpty('email', 'An email is required')
            ->notEmpty('confirm_password', 'You need to input password again')
            ->requirePresence('accept_terms')
            ->notEmpty('accept_terms', 'You must agree to the terms', 'create');

    }







}
