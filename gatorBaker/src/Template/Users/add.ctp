<div class="users form">
<?php echo $this->Form->create('registered_users'); ?>
    <fieldset>
        <legend><?php echo __('Please Input the information'); ?></legend>
        <?php
	        echo $this->Form->input('ID number');
	        echo $this->Form->input('password');
	        echo $this->Form->input('first name');
	        echo $this->Form->input('last name');
	        echo $this->Form->input('email');

    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

