<?php


include './DB.php';



$useid = $_POST["userid"];



$sql = "update productdetails set statusz='Removed' where id='$useid'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}