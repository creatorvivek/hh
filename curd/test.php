<?php 
 $connect = mysqli_connect("localhost", "root", "", "ajax");
$uname= $_POST['uname'];
$uemail= $_POST['uemail'];
$pass= $_POST['upw'];
$sqls="select * from users where email='$uemail'";
$run=mysqli_query($connect,$sqls);
$check=mysqli_num_rows($run);

if($check>0)
{

	echo "email already exist";
}
else
{
	$sql="insert into users (name,email,password) values ('$uname','$uemail','$pass')";
	$runs=mysqli_query($connect,$sql);
	if($runs==true)
	{
		echo "inserted successfully";
	}
}


?> 