<?php

$first_name = $_POST['first_name'] !="" ? $_POST['first_name'] : $errorcount++;
$last_name = $_POST['last_name'] !="" ? $_POST['last_name'] : $errorcount++;
$email = $_POST['email'] !="" ? $_POST['email'] : $errorcount++;
$gender = $_POST['gender'] !="" ? $_POST['gender'] : $errorcount++;
$designation= $_POST['designation'] !="" ? $_POST['designation'] : $errorcount++;
$password= $_POST['password'] !="" ? $_POST['password'] : $errorcount++;

?>