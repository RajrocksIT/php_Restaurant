<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 15-12-2018
 * Time: 20:14
 */

require_once("config.php");
require_once("header.php");
include("left-nav.php");

$MENU_ID = $_GET['MENU_ID'];

$foundmenu = fetchThisItem($MENU_ID);

?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
  table.table-style-three {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: 1px;
    border-color: #3A3A3A;
    border-collapse: collapse;
  }
  table.table-style-three th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #D56A6A;
    color: #ffffff;
  }
  table.table-style-three a {
    color: #ffffff;
    text-decoration: none;
  }

  table.table-style-three tr:hover td {
    cursor: pointer;
  }
  table.table-style-three tr:nth-child(even) td{
    background-color: #F7CFCF;
  }
  table.table-style-three td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #ffffff;
  }
</style>

</head>
<body>

<form name="Addtobasket" method="post" action="cart.php">
<table class="table-style-three">
  <?php foreach ($foundmenu as $cart) { ?>
      <tr><td>User_Id</td> <td><input type = "text" name = "User_Id" value ="<?php session_start();  echo $_SESSION['ThisUser'];?> "></td></tr>
  <tr><td>Menu_ID</td>      <td><input type="text" name="Menu_ID" value="<?php print $cart['Menu_Id']; ?>"></td></tr>
  <tr><td>Menu_Name</td>       <td><input type="text" name="Menu_Name" value="<?php print $cart['Menu_Name']; ?>"></td></tr>
  <tr><td>Price/Q</td>  <td><input type="text" name="Price/Q" value="<?php print $cart['Menu_Price']; ?>"></td></tr>
  <tr><td>Quantity</td>          <td><input type="text" name="Quantity" value=""></td></tr>
  <?php } ?>
</table>

  <input type="submit" name="0" value="Add">
</form>


</body>
</html>