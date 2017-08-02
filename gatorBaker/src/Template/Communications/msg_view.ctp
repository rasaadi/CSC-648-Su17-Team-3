<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:49 AM
 */
?>

<div class="View Message">

    <h1> View Message </h1>

    <h4> Sender: <?= h($communication->msg_sender) ?> </h4>

    <p> Recipient: <?= h($communication->msg_recipient) ?> </p>

    <p> Subject: <?= h($communication->msg_subject) ?> </p>

    <p> Message Body: <?= h($communication->msg_body) ?> </p>

    <p> Sent Data: <?= $communication->created->format(DATE_RFC850) ?> </p>

</div>
