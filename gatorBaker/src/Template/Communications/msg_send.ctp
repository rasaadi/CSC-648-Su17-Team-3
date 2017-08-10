<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:49 AM
 */
?>

<div class="Send Message" xmlns:here="http://www.w3.org/1999/xhtml">
    <?= $this->Form->create($communication) ?>
    <fieldset>
        <legend><?= __('Send Message') ?></legend>
        <p><strong> Please write your message here:</strong></p>
        <?= $this->Form->input('msg_body', ['label' => 'Message Body', 'rows' => '10']); ?>
    </fieldset>
    <?= $this->Form->button(__('Send')); ?>
    <?= $this->Form->end() ?>
</div>