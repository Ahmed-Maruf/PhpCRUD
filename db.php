<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/4/2017
 * Time: 2:47 AM
 */
//Connection to database!!!!

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {
	echo mysqli_error($connection);
}
else "Connected";
?>