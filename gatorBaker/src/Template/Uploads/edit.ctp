<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:58 PM
 */
?>

<div class="updateMedia">

    <legend>Update Media</legend>

        <?php

            echo $this->Form->create($upload, ['enctype' => 'multipart/form-data']);

                echo $this->Form->input('title', ['label' => 'Title']);

                echo $this->Form->input('description', ['label' => 'Description', 'rows' => '3']);

                echo $this->Form->input('media_category', ['label' => 'Category ']);

                echo $this->Form->input('owner', ['label' => 'Owner']);

                echo $this->Form->input('price', ['label' => 'Price($)']);

                // Following is the upload field (photo)
                echo $this->Form->control('media_data', [
                    'label' => 'Select Media ',
                    'type' => 'file'
                ]);

        //        echo $this->Form->input('media_data', ['label' => 'Media Data']); // NOTE: This field needs to migrated to media_data

                echo "<html><br></html>";

                echo $this->Form->button(__('Save Media'));

            echo $this->Form->end();
        ?>
</div>


