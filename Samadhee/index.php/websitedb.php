<?php

include_once '../index.php/dbconnect.php'; 
 /*
$db="CREATE DATABASE userdetails;"; //1st semi-colon represents end of the sql query. 2nd one represents the end of the php code

if(mysqli_query($con,$db))
{
	echo "Database created";
}
else
{
	echo "Database creation failed".mysqli_error($con);
}
*/

//USE the created database

$usedb="USE userdetails;";
mysqli_query($con,$usedb);

$table="CREATE TABLE contactdetails(Name Varchar(30) ,Email Varchar(30),Message Varchar(50));";

if (mysqli_query($con,$table))
{
	echo "Table is created";
}
else {
	echo "Table creation failed".mysqli_error($con);
}

$usedb="USE userdetails;";
$table2="CREATE TABLE advicedetails(Name Varchar(30) ,Email Varchar(30),Phone_No Varchar(10),Description Varchar(50));";

if (mysqli_query($con,$table2))
{
	echo "Table 2 is created";
}
else {
	echo "Table creation failed".mysqli_error($con);
}


mysqli_close($con); //closing the database



?>