<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 15-12-2018
 * Time: 17:15
 */
include("left-nav.php");

?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>
      Restaurants : Order Food Online
  </title>
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
      color: blue;
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

<?php require_once("config.php");

  $Menu = fetchAllMenu();

  ?>
  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
        <!-- display user details header  -->
        <th>MENU_ID</th>
        <th>MENU_NAME</th>
        <th>MENU_PRICE ($$)</th>
        <th>What It Looks like</th>
      </thead>
      <tbody>
      <?php
      foreach($Menu as $displayRecords) { ?>
      <tr>
          <td><a href = "additem.php?MENU_ID=<?php print $displayRecords['MENU_ID']; ?>"><?php print $displayRecords['MENU_ID']; ?></a></td>
        <td><?php print $displayRecords['MENU_NAME']; ?></td>
        <td><?php print $displayRecords['MENU_PRICE']; ?></td>
        <td><IMG SRC = "<?php print $displayRecords['IMAGE']; ?>"</td>
      </tr>
      <?php } ?>
      <form name="ViewCart" method="post" action="cart.php">
          <input type="Submit" name=" View Cart" value="View Cart">
      </form>

      </tbody>
  </table>
</body>
</html>

