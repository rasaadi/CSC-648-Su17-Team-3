<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 10:48 AM
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover{background-color:#f5f5f5}
        </style>
    </head>
    <body>
        <div class="messageList">

            <legend> Message List </legend>

 <!--           <button><?= $this->Html->link('Send Message', ['action' => 'msgSend']) ?></button>  -->

            <table>
                <tr>
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
        </div>
    </body>
</html>
