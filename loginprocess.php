<?php 

session_start();

$dbUser="root";
$dbPassword="";
$dbName="bcis";
$server="localhost";

$con=mysqli_connect($server,$dbUser,$dbPassword,$dbName) or die("Error Connection");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * from usertbl where username='$username' and password='$password' ";

$res=mysqli_query($con,$sql);

if (mysqli_num_rows($res)>0) {
	$_SESSION['username']=$username;
	header("location:index.php");
}else{
	header("location:login.php?error");

}





 ?>