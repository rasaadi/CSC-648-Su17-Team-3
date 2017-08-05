<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:57 PM
 */
?>

<div class="View Media">


        <legend>View Media</legend>

            <h4> <strong>Title:</strong> <?= h($upload->title) ?> </h4>

            <p> <strong>Description:</strong> <?= h($upload->description) ?> </p>

            <p> <strong>Category:</strong> <?= h($upload->media_category) ?> </p>

            <p> <strong>Price($):</strong> <?= h($upload->price) ?> </p>

            <p> <strong>Media Data:</strong> <?= h($upload->media_data) ?> </p>

            <p> <strong>Owner:</strong> <?= h($upload->owner) ?> </p>

            <p> <small> Created: <?php echo $upload->media_created->format(DATE_RFC850) ?> </small> </p>
</div>
