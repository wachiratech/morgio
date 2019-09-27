<?php
$host="localhost";
$username="root";
$password="";
$db_name="ebook";

	
	//create connection
$con=mysqli_connect ($host ,$username,$password,$db_name);

$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');
if(!empty($email)){
if(!empty($password)){

$sql="select *from signup where email='$email'and password='$password' ";
$result= mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck >0)
{
	
	
	echo"login successful";
	header("location:onlinelibhome.html");
}
else
{
	


	echo "login failed";
	
}}



else{
	echo"password  should not be empty";

}}
else{
	echo"email should not be empty";

}

?>