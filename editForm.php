<?php
require("dbconnect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

$skill_arr = array("PHP","JAVA","Python","JavaScript");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>บันทึกข้อมูลพนักงาน</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <h1 class="text-center">แบบฟอร์มบันทึกข้อมูล</h1>
      <hr>
      <form action="editData.php" method="post">
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
         <div>
            <label for="">ชื่อ</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">
         </div>
         <div class="my-3">
            <label for="">นามสกุล</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>">
         </div>
         <div>
            <label for="">เพศ</label>
            <?php if($row["gender"] == "male"){
               echo "<input type='radio' name='gender' value='male' checked>ชาย";
               echo "<input type='radio' name='gender' value='female'>หญิง";
               echo "<input type='radio' name='gender' value='other'>อื่นๆ";
            } elseif($row["gender"] == "female"){
               echo "<input type='radio' name='gender' value='male'>ชาย";
               echo "<input type='radio' name='gender' value='female' checked>หญิง";
               echo "<input type='radio' name='gender' value='other'>อื่นๆ";
            } else {
               echo "<input type='radio' name='gender' value='male'>ชาย";
               echo "<input type='radio' name='gender' value='female'>หญิง";
               echo "<input type='radio' name='gender' value='other' checked>อื่นๆ";
            } ?>
         </div>
         <div class="my-3">
            <label for="">ทักษะความสามารถ</label>
            <?php
               $skill = explode(",",$row["skills"]);
               foreach($skill_arr as $value){
                  if(isset($value,$skill)){
                     echo "<input type='checkbox' name='skill[]' value='$value' checked>$value";
                  }else {
                     echo "<input type='checkbox' name='skill[]' value='$value'>$value";
                  }
               }
            ?>
         </div>
         <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
         <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
         <a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
      </form>
   </div>
</body>
</html>