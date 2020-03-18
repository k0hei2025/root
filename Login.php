<?php
$con = mysqli_connect('127.0.0.1','root','');
if (!$con)
{
  echo 'Not connected To Server';
}
if (!mysqli_select_db($con,'food'))
{
  echo 'Database Not Selected';
}                                                  
$Email = $_POST['Email'];
$pass = $_POST['Password'];
$sql = "INSERT INTO login VALUES ('$Email','$pass')";
if (!mysqli_query($con,$sql))
{
  echo mysqli_error($con);
} 
else
{
  echo 'Inserted';
}
header("refresh:2; url=login.html");
?>

