<?php

$link = mysqli_connect('localhost','root','','HomeWork2');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Employee_table(
    Employee_Id int(6) PRIMARY KEY,
    First_Name VARCHAR(20),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(15),
    Hire_Date DATE NOT NULL,
    Job_Id VARCHAR(10) NOT NULL,
    Salary int(8),
    Commission_pct int(2),
    Manager_id int(6),
    Department_Id int(4)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>