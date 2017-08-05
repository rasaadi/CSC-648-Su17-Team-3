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
                    'message' => 'Password need to be between 4 to 15 characters',
                ]
            ])
            ->add('password', [
                'compare' => [
                    'rule' => ['compareWith', 'confirm_password']
                ]
            ])
            ->notEmpty('email', 'An email is required')
            ->notEmpty('confirm_password', 'You need to input password again')
            ->add('confirm_password', [
                'length' => [
                    'rule' => ['lengthBetween', 4, 15],
                    'message' => 'Password need to be between 4 to 15 characters',
                ]
            ]);

    }

}
