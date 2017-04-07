<?php
	$con = mysqli_connect("127.0.0.1",'root','password');
	if(!$con)
	{
		echo 'not connected to server';
	}
	if(!mysqli_select_db($con,'clinic'))
	{
		echo 'database not selected';
	}
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$details=$_POST['textarea'];
	$sql="INSERT INTO patients values('$fname','$lname','$age','$dob','$phone','$gender','$details')";
	if(!mysqli_query($con,$sql))
	{
		echo "not inserted";
	}
		header("refresh:0; url=display.php");

?>

