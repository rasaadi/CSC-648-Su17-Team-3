<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:51 AM
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommunicationsTable extends Table{

    public function initialize(array $config)
    {
        $this->setTable('communications');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('msg_sender', 'A Sender is required')
            ->notEmpty('msg_recipient', 'A Recipient is required');

    }

//    public function isOwnedBy($communicationId, $userId)
//    {
//        return $this->exists(['id' => $communicationId, 'recipient_id' => $userId]);
//    }
}