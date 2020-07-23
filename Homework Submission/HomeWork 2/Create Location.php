<?php

$link = mysqli_connect('localhost','root','','HomeWork2');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Location_table(
    Location_id int(4) PRIMARY KEY,
    Street_Address VARCHAR(40) NOT NULL,
    Postal_Code VARCHAR(12) NOT NULL,
    City VARCHAR(30),
    State_Province VARCHAR(25) NOT NULL,
    Country_ID VARCHAR(2) NOT NULL
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>