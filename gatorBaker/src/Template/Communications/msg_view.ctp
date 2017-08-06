<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:49 AM
 */
?>

<div class="View Message">
        <fieldset>
            <legend>View Message</legend>

            <button><?= $this->Html->link('Message List', ['action' => 'msgList']) ?></button>

            <h4> Sender: <?= h($communication->msg_sender) ?> </h4>

            <p> Recipient: <?= h($communication->msg_recipient) ?> </p>

            <p> Subject: <?= h($communication->msg_subject) ?> </p>

            <p> Message Body: <?= h($communication->msg_body) ?> </p>

            <p> Sent Data: <?= $communication->created->format("l, d-M-y") ?> </p>
        </fieldset>
</div>
