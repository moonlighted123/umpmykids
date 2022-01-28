<?php

$db = mysqli_connect("localhost","root","","mykids");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>