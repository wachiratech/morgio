<?php


$host="localhost";
$username="root";
$password="";
$db_name="ebook";

	
	//create connection
$con=mysqli_connect ($host ,$username,$password,$db_name);


$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');

$sql="select *from login where $username='$username'";
$result= mysqli_query($con,$sql);

if(mysqli_query($con,$sql)>0)
{
	$status="exist";
}
else
{
	
$sql="insert into online(username,password)
	values('$username','$password')";
if(mysqli_query($con,$sql)>0)
{
	echo "success";
	$status="ok";
}
else
{
	echo "error";
	$status="error";
}
	}	

?>