<?php 

$dbUser="root";
$dbPassword="";
$dbName="bcis";
$server="localhost";

$con=mysqli_connect($server,$dbUser,$dbPassword,$dbName) or die("Error Connection");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="Insert into  usertbl (username,password) values ('$username','$password')";

$res=mysqli_query($con,$sql);

if ($res>0) {
	header("location:login.php?success");
}else{
	header("location:login.php?error");

}





 ?>