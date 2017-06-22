<?php
/**
* Created by PhpStorm.
* User: rafsan
* Date: 6/22/2017
* Time: 3:08 AM
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        $title = 'About Team# 03';
        $this->assign('title',$title);
        ?>
    </head>

    <body>
        <h1> Welcome! We are CSC648/848 Team 03! </h1>
        <p> Hello! Our team contains 6 members: </p>

        <p>
            <?php
            echo $this->Html->link(
                'Brandon',
                ['controller' => 'About', 'action' => 'brandon', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Jizhou',
                ['controller' => 'About', 'action' => 'jizhou', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Rafsan',
                ['controller' => 'About', 'action' => 'rafsan', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Raghav',
                ['controller' => 'About', 'action' => 'raghav', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Todaka',
                ['controller' => 'About', 'action' => 'todaka', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Zach',
                ['controller' => 'About', 'action' => 'zach', '_full' => true]
            );
            ?>
        </p>
    </body>
</html>