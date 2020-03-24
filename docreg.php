<?php

$link=mysqli_connect('localhost','root','','vaibhav');          
	$a=$_POST['Gender'];
	$b=$_POST['Caste'];
	$c=$_POST['Religion'];
	$d=$_POST['MaritalStatus'];
$e=$_POST['Name'];
        $f=$_POST['Age'];
        $g=$_POST['Height'];
        $h=$_POST['Education'];
        $i=$_POST['JobType'];
        $j=$_POST['MonthlyIncome'];
       
        $k=$_POST['House'];
        $l=$_POST['Address'];
        $m=$_POST['Region'];
        
        
        
        $n=$_POST['Email'];
       
        $o=$_POST['loginname'];
        $p=$_POST['phoneno'];
        $q=$_POST['Password'];
$file_name=$_FILES['image']['name'];         
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
$file_store=$file_name;
$file_store="image/".$file_name;
move_uploaded_file($file_tmp,$file_store);
        //$r=$_POST['Submit'];


        if(isset($_POST['Submit']))
	{
		$qry="insert into v3 values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$file_store')";
		mysqli_query($link,$qry);

        	header("location:http://localhost/vaishnavi1/index.php?page=registrationform");	
	}
	
?>
