<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 16-12-2018
 * Time: 00:22
 */

require_once("config.php");
require_once("header.php");
include("left-nav.php");
$Menu_Id = $_POST['Menu_ID'];
$Menu_Name = $_POST['Menu_Name'];
$Menu_Price = $_POST['Price/Q'];
$Quantity = $_POST['Quantity'];

session_start();
$User_Id = $_SESSION['ThisUser'];

$newitem = AddNewItem($User_Id, $Menu_Id, $Menu_Name, $Menu_Price, $Quantity);

Echo $newitem;

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

$Menu = fetchCart();
session_start();
$User_Id = $_SESSION['ThisUser'];
$Bill = CalculateAmount($User_Id);
?>
<form name="Check" method="post" action="decider.php">
    <!-- Table goes in the document BODY -->
    <table class="table-style-three">
        <thead>
        <!-- display user details header  -->
        <th>MENU_ID</th>
        <th>MENU_NAME</th>
        <th>MENU_PRICE ($$)</th>
        <th>Quantity</th>
        <th>Total</th>
        </thead>
        <tbody>
        <?php
        foreach($Menu as $displayRecords) { ?>
            <tr>
                <td><a href = "updateThisRecord.php?MENU_ID=<?php print $displayRecords['MENU_ID']; ?>"><?php print $displayRecords['MENU_ID']; ?> </a></td>                <td><?php print $displayRecords['MENU_NAME']; ?></td>
                <td><?php print $displayRecords['MENU_PRICE']; ?></td>
                <td><?php print $displayRecords['Quantity']; ?></td>
                <td><?php print $displayRecords['Total']; ?></td>
            </tr>
        <?php } ?>
        <TR>
            <input type="submit" name="2" value="Remove Food">
        </TR>
        <tr>
            <th>Billing Amount :</th>
            <td><?php echo $Bill?></td>
        </tr>

        </tbody>
    </table>
</form>
</body>
</html>
