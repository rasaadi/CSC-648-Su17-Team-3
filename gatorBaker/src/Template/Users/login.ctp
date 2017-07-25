<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
 <input type="button" onclick="location.href='http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/gatorBaker/users/add'"value="Register">
 <input type="button" onclick="location.href='http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/gatorBaker/home/index'"value="Home">
<?= $this->Form->end() ?>
</div>