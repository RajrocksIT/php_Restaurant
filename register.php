<?php

require_once("config.php");


require_once("header.php");
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

<form name="createNewRecord" action="CreateNewUser.php" method="post">
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
            <th>User Name</th>
            <td><input type="text" name="User_Name" value=""></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="Password" value=""></td>
        </tr>

        <tr>
            <th>Confirm Password</th>
            <td><input type="password" name="Confirm" value=""></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="text" name="Email" value=""></td>
        </tr>

        <tr>
            <th>Mobile Number</th>
            <td><input type="text" name="number" value=""></td>
        </tr>

        <tr>
            <td><input type="Submit" name="submit" value="Register"></td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>