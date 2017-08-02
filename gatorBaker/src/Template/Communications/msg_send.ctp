<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:49 AM
 */
?>

<div class="Send Message">
    <?= $this->Form->create($communication) ?>
    <fieldset>
        <legend><?= __('Send Message') ?></legend>
        <?= $this->Form->input('msg_recipient', ['label' => 'Recipient']); ?>
        <?= $this->Form->input('msg_subject', ['label' => 'Subject']); ?>
        <?= $this->Form->input('msg_body', ['label' => 'Message Body', 'rows' => '10']); ?>
    </fieldset>
    <?= $this->Form->button(__('Send')); ?>
    <?= $this->Form->end() ?>
</div>