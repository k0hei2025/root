<html>

<h1> New DIshes </h1>
<table>
   <th> hotel name </th>
   <th> Recipie name</th>
   <th> price</th>
   <th> pic</th>
   </thead>
   <tbody>


 <?php

 $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'food');
  if(isset($_POST['submit'])){
    
  $fname = $_POST['recipiename'];
  $frname = $_POST['Email'];
  $fno = $_POST['Contactno'];
  $files = $_FILES['file'];

  print_r($fname);
  echo "<br>";
  
  print_r($frname);
  echo "<br>";
  print_r($fno);
  echo "<br>";
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  
  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));
  $fileextstored = array ('png', 'jpg' , 'jpeg');
  if (in_array($filecheck,$fileextstored))
  {
    $destinationfile ='imgsaver/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
    $q = "INSERT INTO `new`(`Hname`, `Rname`, `price`, `image`) VALUES(' $fname','$frname','$fno','$destinationfile') ";
   $query = mysqli_query($con,$q);
   $displayquery = " select * from new";
   $querydisplay = mysqli_query($con,$displayquery);
   while ($result = mysqli_fetch_array($querydisplay) )  
   {
     ?>
     <tr>
        <td> <?php echo $result ['Hname']; ?> </td> 
        <td> <?php echo $result ['Rname']; ?> </td>
        <td> <?php echo $result ['price']; ?> </td>
        <td> <img src=" <?php echo $result ['image']; ?>"height="100px" width="100px">  </td>
        </tr>
        <?php
   }

   }else {
     echo "extension is not match";
   }
   
  }

  
   
?>
</html>