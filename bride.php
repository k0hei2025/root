


<?php
	$link=mysqli_connect('localhost','root','','vaibhav');
		$qry="select * from v3 where gender='female'";
      
		$q1=mysqli_query($link,$qry);
while($a=mysqli_fetch_array($q1))
{

echo "<img src='includes/$a[18]' width='200px' height='200px' align= 'right'/>";

echo "<h3>";
echo "<b>";
echo "Name - ";
echo "</b>";
echo $a[5];
echo "</h3>";
echo "<br>";
echo "<b>";
echo "Age - ";
echo "</b>";
echo $a[6];
echo "<br>";

echo "<b>";
echo "Caste - ";
echo "</b>";
echo $a[2];
echo "<br>";

echo "<b>";
echo "Region - ";
echo "</b>";
echo $a[13];
echo "<br>";

echo "<b>";
echo "Contact no - ";
echo "</b>";
echo $a[16];
echo "<br>";
echo "<br>";
echo "<br>";

echo "<hr>";

}
?>                 