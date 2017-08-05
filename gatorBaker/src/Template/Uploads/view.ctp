<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:57 PM
 */
?>
<!---->
<!--<label class="col-sm-2 control-label" for="mediaView">-->
<!--    <style>-->
<!--        mediaView{-->
<!--            display: inline;-->
<!--        }-->
<!--    </style>-->
<!--<label>-->

<div class="view media">
    <fieldset>

        <legend>View Media</legend>
<!--        <label class="col-sm-2 control-label" for="mediaView">-->

            <p> <strong>Title:</strong> <?= h($upload->title) ?> </p>

            <p> <strong>Description:</strong> <?= h($upload->description) ?> </p>

            <p> <strong>Category:</strong> <?= h($upload->media_category) ?> </p>

            <p> <strong>Price($):</strong> <?= h($upload->price) ?> </p>

            <p> <strong>Media Data:</strong> <?= h($upload->media_data) ?> </p>

            <p> <strong>Owner:</strong> <?= h($upload->owner) ?> </p>

            <p> <small> Created: <?php echo $upload->media_created->format("l, d-M-y") ?> </small> </p>
    </fieldset>
</div>
