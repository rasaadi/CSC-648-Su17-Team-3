<?php
/**
 * User: Brandon
 * Date: 2017/08/01
 * Time: 6:50
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SearchValidTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('theTitle')
            ->notEmpty('theTitle', 'Please fill this field')
            ->add('theTitle', [
                'length' => [
                    'rule' => ['maxLength', 30],
                    'message' => 'Maximum length of 30 characters.'
                ],
                'custom' => [
                    'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
                    'message' => 'Alphanumeric characters with spaces only'
                ]
            ]);
        return $validator;
    }
}

