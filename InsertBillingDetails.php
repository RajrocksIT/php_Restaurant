<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 16-12-2018
 * Time: 23:13
 */

require_once("config.php");

require_once("header.php");

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$Address = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['Phonenumber'];
$bill = $_POST['bill'];
$cardname = $_POST['CardName'];
$cardnumber = $_POST['CardNumber'];
$pin = $_POST['Pin'];



$newuser = billing($fname, $lname, $Address, $zip, $phone, $bill, $cardname, $cardnumber, $pin);

header('Location: /Restaurant/logout.php');