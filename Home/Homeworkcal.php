<html>
  <head>
    <meta charset="utf-8">
    <title> แสดงประวัติส่วนตัว </title>
  </head>
  <body>
    <?php
      $name = $_GET['name'];
      $surname = $_GET['surname'];
      $sex = $_GET['sex'];
      $age = $_GET['age'];
      $nickname = $_GET['nickname'];
      $hobby = $_GET['hobby'];
      $motto = $_GET['motto'];


      echo "<p>";
      echo " <b> ข้อมูลที่ผู้ใช่ใส่มา </b></br> ";
      echo " ชื่อ-นามสกุล : $name $surname ($nickname)  <br>";
      echo " เพศ : $sex <br>";
      echo " อายุ : $age ปี <br>";
      echo " งานอดิเรก : $hobby <br>";
      echo "คติประจำใจ : $motto <br> ";
     ?>

  </body>
</html>
