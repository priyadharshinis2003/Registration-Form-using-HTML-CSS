<?php
$a=$_POST['name'];
$b=$_POST['dob'];
$c=$_POST['age'];
$d=$_POST['gender'];
$e=$_POST['option'];
$f=$_POST['email'];
$g=$_POST['mobile'];

$con=mysqli_connect("localhost","root","","web");
$sql="INSERT INTO form( user_name,DOB,Age,Gender,Country,Email,Mobile)values('$a','$b','$c','$d','$e','$f','$g')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"LOGIN DETAILS ADDED SUCCESFULLY";
}
else
{
    echo"LOGIN DETAILS ADDED NOT SUCCESFULLY";
}
?>