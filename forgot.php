<?php
$con = mysqli_connect('localhost','root','');
if (!$con)
{
  echo 'Not connected To Server';
}
if (!mysqli_select_db($con,'food'))
{
  echo 'Database Not Selected';
}                                                  
$Email = $_POST['link'];
$sql = "INSERT INTO email VALUES ('$Email')";
if (!mysqli_query($con,$sql))
{
  echo mysqli_error($con);
} 
else
{
  echo 'Link Sent';
}
header("refresh:5; url=login.html");
?>

