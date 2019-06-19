<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 17-12-2018
 * Time: 14:35
 */

require_once("config.php");

require_once("header.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];



$check = checkLogin($username,$password);

if ($check == '0')
{
    $_SESSION['ThisUser'] = $username;
    header('Location: /Restaurant/displaymenu.php');
}
else
{
    echo "login fail";
 header('Location: /Restaurant/index.php');
}