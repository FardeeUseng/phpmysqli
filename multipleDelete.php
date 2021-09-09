<?php
require("dbconnect.php");

$mtdelete = implode(",",$_POST["empcheck"]);
$sql = "DELETE FROM employees WHERE id IN ('$mtdelete')";
$result = mysqli_query($connect,$sql);

if($result){
   header("location:index.php");
   exit(0);
}else {
   echo "error" . mysqli_error($connect);
}

?>