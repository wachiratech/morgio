<?php
$host="localhost";
$username="root";
$password="";
$db_name="ebook";

	
	//create connection
$con=mysqli_connect ($host ,$username,$password,$db_name);


$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$email= filter_input(INPUT_POST,'email');
$mobilenumber = filter_input(INPUT_POST,'mobilenumber');
$password = filter_input(INPUT_POST,'password');

if(!empty($firstname)||!empty($lastnamename)||!empty($email)
	||!empty($mobilenumber)||!empty($password)){
if(!empty($password)){


$sql="select *from signup where email='$email' ";
$result= mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
	$status="exist";
	echo"please choose another email";
}
else
{
	
$sql="insert into signup(firstname,lastname,email,mobilenumber,
password)
	values('$firstname','$lastname','$email','$mobilenumber',
'$password')";
	if(mysqli_query($con,$sql)>0)
{
	echo "you have successfully registered your online lib account";
	$status="ok";
}
else
{
	echo "Account registration not successful";
	$status="error";
	
}
}}
else{
	echo"All field should not be empty";



	}
echo json_encode(array("responce"=>$status));
	mysqli_close($con);
	}
?>