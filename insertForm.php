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
      <form action="insertData.php" method="post">
         <div>
            <label for="">ชื่อ</label>
            <input type="text" name="fname" class="form-control">
         </div>
         <div class="my-3">
            <label for="">นามสกุล</label>
            <input type="text" name="lname" class="form-control">
         </div>
         <div>
            <label for="">เพศ</label>
            <input type="radio" name="gender" value="male">ชาย
            <input type="radio" name="gender" value="female">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ
         </div>
         <div class="my-3">
            <label for="">ทักษะความสามารถ</label>
            <input type="checkbox" name="skill[]" value="PHP">PHP
            <input type="checkbox" name="skill[]" value="JAVA">JAVA
            <input type="checkbox" name="skill[]" value="Python">Python
            <input type="checkbox" name="skill[]" value="JavaScript">JavaScript
         </div>
         <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
         <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
         <a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
      </form>
   </div>
</body>
</html>