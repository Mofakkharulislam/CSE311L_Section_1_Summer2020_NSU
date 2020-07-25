<?php

$link = mysqli_connect('localhost','root','','HomeWork2');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Department(
    Department_Id int(3) PRIMARY KEY,
    Department_Name VARCHAR(20),
    Manager_id VARCHAR(4),
    Location_id int(4)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>