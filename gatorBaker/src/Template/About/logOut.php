<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/13
 * Time: 9:08
 */
session_start();

//  when access logout.php?logout, user can log out
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>