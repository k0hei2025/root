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
$user = $_POST['Username'];
$email = $_POST['Email'];
$contact = $_POST['Contactno'];
$pass = $_POST['Password'];
$confirm = $_POST['Confirmpass'];
$sql = "INSERT INTO epicure VALUES ('$user','$email','$contact','$pass','$confirm')";
if (!mysqli_query($con,$sql))
{
  echo mysqli_error($con);
} 
else
{
  echo 'Inserted';
}
header("refresh:5; url=Register.html");
?>

