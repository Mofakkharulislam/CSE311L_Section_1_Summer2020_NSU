<?php

$link =mysqli_connect('localhost','root','','Quiz');

if($link == false)
{
    die ("Error:Could Not connect.".mysqli_connect_error());
}

$sql ="INSERT INTO Quiz(Job_Id,Job_Title,Min_Salary,Max_Salary) VALUES
    ('AD_PRES','President',2000,4000),
    ('AD_VP','Administration Vice President',1500,3000),
    ('AD_ASST','Administration Assistent',300,6000),
    ('Ac_Mgr','Account Manager',820,16000),
    ('SA_MAN','Sales MANAGER',420,9000),
    ('SA_REP','SALES REPRESENTTATIVE',1000,20000),
    ('SA_MAN','Stock Clerk',205,1700),
    ('IT_PROG','Programing',2000,5000),
    ('IT_PR','Programing',4000,10000)";

if(mysqli_query($link,$sql))
{
    echo "value inserted";

}
else
{
    echo "Error: Could not able to Insert value." .mysqli_error($link);
}

mysqli_close($link)

?>