<?php
require("dbconnect.php");

$empsearch = $_POST["empsearch"];
$sql = "SELECT * FROM employees WHERE fname LIKE '%$empsearch%' ORDER BY fname ASC";
$result = mysqli_query($connect,$sql);
$order = 1;

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
      <h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
      <hr>
      <form action="searchData.php" method="post">
         <label for="">ค้นหาพนักงาน</label>
         <input type="text" class="form-control my-3" name="empsearch" placeholder="ป้อนข้อมูลพนักงาน">
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
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
               <td><?php echo $order++; ?></td>
               <td><?php echo $row["fname"]; ?></td>
               <td><?php echo $row["lname"]; ?></td>
               <td><?php echo $row["gender"]; ?></td>
               <td><?php echo $row["skills"]; ?></td>
               <td>
                  <a href="editForm.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">แก้ไข</a>
               </td>
               <td>
                  <a href="deleteData.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure')" class="btn btn-danger">ลบ</a>
               </td>
               <form action="multipleDelete.php" method="post">
                  <td>
                     <input type="checkbox" name="empcheck[]" value="<?php echo $row["id"]; ?>">
                  </td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
      <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
      <input type="submit" value="ลบข้อมูล(check)" onclick="return confirm('Are you sure')" class="btn btn-danger">
      </form>
      <button class="btn btn-primary" onclick="checkAll()">เลือกทั้งหมด</button>
      <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
   </div>
</body>

<script>
function checkAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=true;
    }
}
function uncheckAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=false;
    }
}
</script>

</html>