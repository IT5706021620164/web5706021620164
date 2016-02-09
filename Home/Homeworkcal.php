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
      $phone = $_GET['phone'];
      $day = $_GET['day'];
      $mon = $_GET['mon'];
      $year = $_GET['year'];
      $html5email = $_GET['html5email'];

      echo "<p>";
      echo " <b> ข้อมูลที่ผู้ใช่ใส่มา </b></br> ";
      echo " ชื่อ-นามสกุล : $name $surname ($nickname)  <br>";
      echo " เพศ : $sex <br>";
      echo " อายุ : $age ปี <br>";
      echo " งานอดิเรก : $hobby <br>";
      echo "คติประจำใจ : $motto <br>";
      echo "เบอร์โทรศัพท์ : $phone <br>";
      if($day>=1 && $day <=31)
      echo " วันเกิด : $day <br>";

      if($mon="มกราคม")
       echo "เดือน : January <br>";
      elseif ($mon="กุมภาพันธ์")
       echo "เดือน : February <br>";
      elseif ($mon="มีนาคม")
        echo "เดือน : March <br>";
      elseif ($mon="เมษายน")
        echo "เดือน : April <br>";
      elseif ($mon="พฤษภาคม")
        echo "เดือน : May <br>";
      elseif ($mon="มิถุนายน")
        echo "เดือน : June <br>";
      elseif ($mon="กรกฏาคม")
        echo "เดือน : July <br>";
      elseif ($mon="สิงหาคม")
        echo "เดือน : August <br>";
      elseif ($mon="กันยายน")
        echo "เดือน : September <br>";
      elseif ($mon="ตุลาคม")
        echo "เดือน : October <br>";
      elseif ($mon="พฤศจิกายน")
        echo "เดือน : November <br>";
      elseif ($mon="ธันวาคม")
        echo "เดือน : December <br>";

      $year -= 543;
      echo "ปี : $year <br>";

      echo " Email : $html5email <br>"

     ?>

  </body>
</html>
