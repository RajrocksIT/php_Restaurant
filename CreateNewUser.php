<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 18-12-2018
 * Time: 00:56
 */

require_once("config.php");

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$UserName = $_POST['User_Name'];
$Password = $_POST['Password'];
$confirm = $_POST['Confirm'];
$Email = $_POST['Email'];
$number = $_POST['number'];

$newuser = createNewUser($fname, $lname, $UserName, $Password, $Email, $number);

echo "Registered successfully";

include ("login.php");