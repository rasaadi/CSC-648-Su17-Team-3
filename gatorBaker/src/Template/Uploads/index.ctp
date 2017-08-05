<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:39 PM
 */
?>
<!-- $this->Html is the form helper object that contain code snippets for html elements like forms, links etc
    link() method generate html link
-->
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
        <br class="mediaLibrary">

            <legend> Media Library </legend>

            <button><?= $this->Html->link('Upload Media', ['action' => 'add']) ?></button>
            <br></br>
            <table>
                <tr>
<!--                    <th>Id</th>-->
                    <th>Title</th>
                    <th>Media Data</th>
                    <th>Price($)</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>

                <!-- Here's where we loop through our $uploads query object, printing out upload info -->

                <?php foreach ($uploads as $upload): ?>
                <tr>


                    <td>
                        <?= $this->Html->link($upload->title, ['action' => 'view', $upload->id]) // Title?>
                    </td>

                    <td>
                        <?= $upload->media_data ?>
                    </td>

                    <td>
                        <?= $upload->price ?>
                    </td>

                    <td>
                        <?= $upload->media_created->format("l, d-M-y") // Created Date?>
                    </td>

                    <td>
                        <?= $this->Html->link('Edit', ['action' => 'edit', $upload->id]) // Edit action?>

                        <?= $this->Form->postLink(
                            'Delete',
                            ['action' => 'delete', $upload->id],
                            ['confirm' => 'Are you sure?']) // Delete action
                        ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>

