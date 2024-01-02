<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "peace2.0";
$con = new mysqli($servername, $username, $password, $database);
if($con->connect_error)
{
    die("Connection failed:". $con->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["fname"];
    $code = $_POST["fcode"];
    $email = $_POST["femail"];
    $contact = $_POST["fcontact"];
    $address = $_POST["faddress"];

    $sql = "INSERT INTO orderlist (name, code, email, contact, address) 
    VALUES ('$name', '$code', '$email', '$contact', '$address')";

    if($con->query($sql) == True)
    {
        echo "Order placed successfully";
    }
    else
    {
        echo "Error: ". $sql. "<br>";
    }
}

$con->close();
?>