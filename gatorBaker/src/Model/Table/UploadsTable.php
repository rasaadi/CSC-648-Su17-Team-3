<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/21/2017
 * Time: 11:22 PM
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UploadsTable extends Table
{
    public function initialize(array $config)
    {
//        $this->setTable('topics');
        $this->setTable('MediaInfo');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        /**
         * Basic/Simple Example
         */
//        $this->addBehavior('Josegonzalez/Upload.Upload', [
//            'photo' => [
//                'fields' => [
//                    // if these fields or their defaults exist
//                    // the values will be set.
//                    'dir' => 'photo_dir', // defaults to `dir`
//                    'size' => 'photo_size', // defaults to `size`
//                    'type' => 'photo_type', // defaults to `type`
//                    'keepFilesOnDelete' => false
//                ],
//            ],
//        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'media_data' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'media_dir', // defaults to `dir`
                    'size' => 'media_size', // defaults to `size`
                    'type' => 'media_type', // defaults to `type`
                    'keepFilesOnDelete' => false
                ],
            ],
        ]);

    }
}

?>
