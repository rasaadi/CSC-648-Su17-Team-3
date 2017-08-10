<style>
usersform{
    display: inline;
}
</style>

<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
	<label class="col-sm-2 control-label" for="usersform">
	<legend><?= __('LOGIN') ?></legend>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>

<?php
	echo "</br>";
	echo $this->Html->link(
				'Click here to register',
				'/users/add',
				['class' => 'button']);

?>
</label>

