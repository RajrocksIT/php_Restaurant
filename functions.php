<?php
/**
 * Created by PhpStorm.
 * User: surya
 * Date: 15-12-2018
 * Time: 13:33
 */


function fetchAllMenu()
{

    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT MENU_ID, MENU_NAME, MENU_PRICE, IMAGE FROM MENU ORDER BY MENU_ID");

    $stmt->execute();
    $stmt->bind_result($MENU_ID,$MENU_NAME, $MENU_PRICE, $IMAGE);
    while ($stmt->fetch()){
        $row[] = array('MENU_ID' => $MENU_ID,
            'MENU_NAME' => $MENU_NAME,
            'MENU_PRICE' => $MENU_PRICE,
            'IMAGE' => $IMAGE
        );
    }
    $stmt->close();
    return ($row);
}


function fetchThisItem($MENU_ID)
{
    $MENU_ID1 = $MENU_ID;
    global $mysqli;$db_table_prefix;
    $stmt = $mysqli->prepare(
        "
    SELECT Menu_Id, Menu_Name, Menu_Price
    FROM
     menu
    WHERE
    Menu_Id = '$MENU_ID1'"
    );
    $stmt->execute();
    $stmt->bind_result($MENU_ID, $Menu_Name, $Price);

    while ($stmt->fetch()) {
        $row[] = array(
            'Menu_Id'=> $MENU_ID,
            'Menu_Name' => $Menu_Name,
            'Menu_Price' => $Price
        );
    }
    $stmt->close();
    return ($row);
}

function AddNewItem($User_Id, $Menu_Id, $Menu_Name, $Menu_Price, $Quantity)
{
    $Total = $Menu_Price * $Quantity;
    global $mysqli;
    $stmt = $mysqli->prepare(
        "INSERT INTO cart ( User_Id, Menu_Id, Menu_Name, Menu_Price, Quantity, Total, Active
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
        ?,
		1)"
    );
    $stmt->bind_param("ssssss", $User_Id,$Menu_Id, $Menu_Name, $Menu_Price, $Quantity, $Total);
    $result = $stmt->execute();
    $stmt->close();
    return $result;

}


function fetchCart()
{

    session_start();
    $local = $_SESSION['ThisUser'];
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT MENU_ID, MENU_NAME, MENU_PRICE, Quantity, Total FROM cart where User_Id = '$local' and Active = '1'");
    $stmt->execute();
    $stmt->bind_result($MENU_ID,$MENU_NAME, $MENU_PRICE, $Quantity, $Total);
    while ($stmt->fetch()){
        $row[] = array('MENU_ID' => $MENU_ID,
            'MENU_NAME' => $MENU_NAME,
            'MENU_PRICE' => $MENU_PRICE,
            'Quantity' => $Quantity,
            'Total' => $Total

        );
    }
    $stmt->close();
    return ($row);
}


function CalculateAmount($User_Id)
{
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("select sum(Total) from cart where User_Id = '$User_Id' and Active = '1'");
    $stmt->execute();
    $stmt->bind_result($sum);
while($stmt->fetch())
{
    $row[] = array('sum(Total)' => $sum);
}
$stmt->close();
return $sum;
}


function fetchThisMenu($thisMenuID)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        " select Menu_Id, Menu_Name, Menu_Price, Quantity, Total from cart where Menu_Id = ? and Active = '1' LIMIT 1 "
    );
    $stmt->bind_param("s", $thisMenuID);
    $stmt->execute();
    $stmt->bind_result($MENU_ID,$MENU_NAME, $MENU_PRICE, $Quantity, $Total);
    while ($stmt->fetch()){
        $row[] = array('MENU_ID' => $MENU_ID,
            'MENU_NAME' => $MENU_NAME,
            'MENU_PRICE' => $MENU_PRICE,
            'Quantity' => $Quantity,
            'Total' => $Total

        );
    }
    $stmt->close();
    return ($row);

}


function Deletethisrecord($Menu_ID)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->query("delete from cart where Menu_Id='$Menu_ID'");
    return true;
}



function checkLogin($username,$password)
{
    global $mysqli, $db_table_prefix;
    $stmt = ("select *
		from user_details 
		where  User_id = '$username' and Password = '$password'");

    $result = mysqli_query($mysqli,$stmt);
    $data = mysqli_fetch_array($result, MYSQLI_NUM);

    if ($data[0] > '0' )
    {
        return '0';
    }
    else
    {
        return '1';
    }
}

function billing($fname, $lname, $Address, $zip, $phone, $bill, $cardname, $cardnumber, $pin)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO billing (
		First_Name,Last_Name,
		Address,
		Zip,
		Phone,
		Total_Amount,
		Card_Name,
		Card_Number,
		Pin
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("ssssiissi", $fname, $lname, $Address, $zip, $phone, $bill, $cardname, $cardnumber, $pin);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function DeleteRecord($User_Id)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->query("update cart set active = '0' where User_Id='$User_Id'");
    return true;
}



function createNewUser($fname, $lname, $UserName, $Password, $Email, $number)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO User_details (
		First_Name,Last_Name,User_id,Password,Email,Mobile_Number
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("sssssi", $fname, $lname, $UserName, $Password, $Email, $number);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}