<?php
/**
 * User: Brandon
 * Date: 2017/08/01
 * Time: 6:50
 */
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SearchValidatorTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('theTitle')
            ->notEmpty('title');
        return $validator;
    }
}
