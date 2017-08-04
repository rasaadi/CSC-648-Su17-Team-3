<?php
/**
 * Created by PhpStorm.
 * User: rafsan
 * Date: 7/21/2017
 * Time: 11:57 PM
 */
?>

<h1> View Media </h1>

<h4> Title: <?= h($upload->title) ?> </h4>

<p> Description: <?= h($upload->description) ?> </p>

<p> Category: <?= h($upload->media_category) ?> </p>

<p> Price($): <?= h($upload->price) ?> </p>

<p> Media Data: <?= h($upload->media_data) ?> </p>

<p> Thumbnail: <?= h($upload->thumbnail) ?> </p>

<h4> Owner: <?= h($upload->owner) ?> </h4>

<p> <small> Created: <?php echo $upload->media_created->format("l, d-M-y") ?> </small> </p>

