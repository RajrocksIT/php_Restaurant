<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 16-12-2018
 * Time: 01:04
 */

require_once("config.php");
require_once("header.php");

$Menu_Id = $_POST['Menu_ID'];

session_start();
$User_Id = $_SESSION['ThisUser'];


if ($_POST['0'])
{
    header('Location: /Restaurant/billing.php');
}
else
    if ($_POST['1'])
    {
        header('Location: /Restaurant/displaymenu.php');
        die();
    }

    else
        if ($_POST['2'])
    {
         header('Location: /Restaurant/RemoveFood.php');
         die();
    }
else {
        $deletedrecord = Deletethisrecord($Menu_Id);
        header('Location: /Restaurant/cart.php');
        die();
    }
