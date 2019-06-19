<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 17-12-2018
 * Time: 11:15
 */

require_once("config.php");
include("left-nav.php");

$thisMenuID = $_GET['MENU_ID'];

$founditem = fetchThisMenu($thisMenuID);

session_start();
$User_Id = $_SESSION['ThisUser'];

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

<form name="getmenuDetails" method="post" action="decider.php">
<table class="table-style-three">
  <?php foreach ($founditem as $userdetails) { ?>
  <tr><td>MENU_ID</td>      <td><input type="text" name="Menu_ID" value="<?php print $userdetails['MENU_ID']; ?>"></td></tr>
  <tr><td>MENU_NAME</td>       <td><input type="text" name="Menu_Name" value="<?php print $userdetails['MENU_NAME']; ?>"></td></tr>
  <tr><td>MENU_PRICE($$)</td>  <td><input type="text" name="Menu_Price" value="<?php print $userdetails['MENU_PRICE']; ?>"></td></tr>
  <tr><td>QUANTITY</td>          <td><input type="text" name="Quantity" value="<?php print $userdetails['Quantity']; ?>"></td></tr>
  <tr><td>TOTAL</td>           <td><input type="text" name="Total" value="<?php print $userdetails['Total']; ?>"></td></tr>
  <?php } ?>
</table>

  <input type="submit" name="3" value="Remove Item">

</form>


</body>
</html>