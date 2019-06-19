<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 16-12-2018
 * Time: 01:23
 */


require_once("config.php");


require_once("header.php");

include("left-nav.php");
session_start();
$User_Id = $_SESSION['ThisUser'];

$Bill = CalculateAmount($User_Id);

$UpdateCart = DeleteRecord($User_Id);


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

  <?php require_once("config.php"); ?>

  <form name="createNewRecord" action="InsertBillingDetails.php" method="post">
  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
      <!-- Display CRUD options in TH format -->
      <tr>
        <th>First Name</th>
        <td><input type="text" name="firstname" value=""></td>
      </tr>

      <tr>
        <th>Last Name</th>
        <td><input type="text" name="lastname" value=""></td>
      </tr>

      <tr>
          <th>Address</th>
          <td><input type="text" name="city" value=""></td>
      </tr>

      <tr>
        <th>Zip</th>
        <td><input type="text" name="zip" value=""></td>
      </tr>

      <tr>
        <th>Phone Number</th>
        <td><input type="text" name="Phonenumber" value=""></td>
      </tr>


<tr>
          <th>Payment Details</th>
</tr>

      <tr>
          <th>Total Amount</th>
          <td> <input type="text" name = "bill" value = "<?php echo $Bill ?>"></name></td>
      </tr>

      <tr>
          <th>Card Name</th>
          <td><input type="text" name="CardName" value=""></td>
      </tr>

      <tr>
          <th>Card Number</th>
          <td><input type="text" name="CardNumber" value=""></td>
      </tr>

      <tr>
          <th>Pin</th>
          <td><input type="password" name="Pin" value=""></td>
      </tr>

      <tr>
        <td><input type="Submit" name="submit" value="Confirm Order"></td>
      </tr>
      </thead>
    </table>
  </form>
</body>
</html>