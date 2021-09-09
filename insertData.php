<?php
require("dbconnect.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$skill = implode(",",$_POST["skill"]);

$sql = "INSERT INTO employees(fname,lname,gender,skills) VALUES('$fname','$lname','$gender','$skill')";
$result = mysqli_query($connect,$sql);

if($result){
   header("location:index.php");
   exit(0);
}else{
   mysqli_error($connect);
}

?>