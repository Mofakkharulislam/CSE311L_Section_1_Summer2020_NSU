<?php

$link = mysqli_connect('localhost','root','','Quiz');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Quiz(
    Job_Id VARCHAR(10),
    Job_Title VARCHAR(35),
    Min_Salary int (6),
    Max_Salary int(6)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>