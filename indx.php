<?php
$fullname=$_REQUEST['fname'];
$EMAIL=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$Age=$_REQUEST['age'];
$Height=$_REQUEST['height'];
$weight=$_REQUEST['weight'];
$Target=$_REQUEST['Target'];

if(isset($_POST['btest']))
{
  $host = "localhost";
  $user = "root";
  $password ="";
  $db = "registration";
  $conn= mysqli_connect($host,$user,$password,$db);
  $insert = "insert into client values('$fullname','$EMAIL','$gender','$Age','$Height',$weight','$Target')";
  mysqli_query($conn,$insert);
  if($conn){
      echo("<h1 style='color:green;'> your registration is done!  </h1>");
  }
  else{
      echo("<h1 style='color:white;'> your registration is failed! </h1>");
  }

}
?>