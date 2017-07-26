<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>

   </fieldset>
    <input type="button" onclick="location.href='http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/gatorBaker/users/login'"value="login">
    <input type="button" onclick="location.href='http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/gatorBaker/home/index'"value="Home">
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
