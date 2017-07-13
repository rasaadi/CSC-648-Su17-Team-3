<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/13
 * Time: 8:16
 */


$link =  mysqli_connect('localhost', 'todaka', '915999674');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

print('<p>Connected successfully</p>');

// MySQL

$close_flag = mysqli_close($link);

if ($close_flag){
    print('<p>Success to disconnect</p>');
}

?>
