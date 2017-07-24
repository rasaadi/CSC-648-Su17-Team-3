<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/19
 * Time: 6:50
 */

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        '*' => true,
        'ID' => false
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

}