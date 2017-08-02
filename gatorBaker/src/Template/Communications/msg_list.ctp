<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:48 AM
 */
?>

<h1> Message List </h1>
<button><?= $this->Html->link('Send Message', ['action' => 'msgSend']) ?></button>
<table>
    <tr>
        <th>Id</th>
        <th>Sender</th>
        <th>Recipient</th>
        <th>Subject</th>
        <th>Sent On</th>
        <th>Actions</th>
    </tr>

    <!-- Here's where we loop through our $communicationsManager query object, printing out message info -->

    <?php foreach ($communications as $communication): ?>
        <tr>
            <td>
                <?= $communication->id //ID ?>
            </td>

            <td>
                <?= $communication->msg_sender ?>
            </td>

            <td>
                <?= $communication->msg_recipient ?>
            </td>

            <td>
                <?= $communication->msg_subject ?>
            </td>

            <td>
                <?= $communication->created->format("l, d-M-y") // Created Date?>
            </td>

            <td>
                <?= $this->Html->link('View Message', ['action' => 'msgView', $communication->id]) // View Message action?>
            </td>

        </tr>
    <?php endforeach ?>
</table>
