<?php
require("dbconnect");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ข้อมูลพนักงาน</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <h1 class="text-center">ข้อมูลพนักงาน</h1>
      <hr>
      <form action="searchData.php" method="post">
         <label for="">ค้นหาพนักงาน</label>
         <input type="text" class="form-control my-3" placeholder="ป้อนข้อมูลพนักงาน">
         <input type="submit" value="ค้นหา" class="btn btn-dark mb-3">
      </form>
      <table class="table table-dark table-borderless text-center">
         <thead>
            <tr>
               <th>ลำดับที่</th>
               <th>ชื่อ</th>
               <th>นามสกุล</th>
               <th>เพศ</th>
               <th>ทักษะความสามารถ</th>
               <th>แก้ไขข้อมูล</th>
               <th>ลบข้อมูล</th>
               <th>ลบหลายข้อมูล</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
               <td>AAA</td>
            </tr>
         </tbody>
      </table>
      <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
   </div>
</body>
</html>