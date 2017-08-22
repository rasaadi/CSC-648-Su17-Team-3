<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:56 PM
 */
?>

<style>
uploadform{
    display: inline;
}
</style>
    <h1> Upload Media </h1>
	<label class="col-sm-2 control-label" for="uploadform">

<?php

    echo $this->Form->create($upload, ['enctype' => 'multipart/form-data']);

        echo $this->Form->input('title', ['label' => 'Title']);

        echo $this->Form->input('description', ['label' => 'Description', 'rows' => '3']);

        echo $this->Form->input('media_category', ['label' => 'Category ']);

        echo $this->Form->input('price', ['label' => 'Price($)']);
		
//		echo $this->Form->input('thumbnail', ['label' => 'thumbnail']);

        // Following is the upload field (photo)
        //echo $this->Form->file('submittedfile');
        echo $this->Form->control('media_data', [
            'label' => 'Select Media ',
            'type' => 'file'
        ]);

        echo "</br>";

        echo $this->Form->button(__('Save Media'));

    echo $this->Form->end();

?>
