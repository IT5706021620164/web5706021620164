<html>
<head><meta charset="utf-8"><title> สร้างประวัติส่วนตัว </title></head>
<body>
<form method="get" action="Homeworkcal.php">
<table border="1" align="center" width="500">
  <tr>
    <td colspan="2" align="center">
      <big> กรอกประวัติส่วนตัว </big>
    </td>
  </tr>
  <tr>
    <td> ชื่อ : </td>
    <td><input type="text" name="name" size="15" value=""/></td>
  </tr>
  <tr>
    <td> นามสกุล : </td>
    <td><input type="text" name="surname" size="15" value=""/></td>
  </tr>
  <tr>
    <td> ชื่อเล่น : </td>
    <td><input type="text" name="nickname" size="15" value=""/></td>
  </tr>
  <tr>
      <td> เพศ : </td>
    <td align = "center">
      <input type="radio" name="sex" value="ชาย"> ชาย <br>
      <input type="radio" name="sex" value="หญิง"> หญิง <br>
  </tr>
  <tr>
    <td> อายุ : </td>
    <td align = "center">
      <input type="radio" name="age" value="6-11"> 6-11 ปี <br>
      <input type="radio" name="age" value="12-20"> 12-20 ปี <br>
      <input type="radio" name="age" value="20-60"> 20-60 ปี <br>
      <input type="radio" name="age" value="มากกว่า 60">  มากกว่า 60 ปี <br>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="ส่งข้อมูล" />
      <input type="reset" value="ยกเลิก">
    </td>
  </tr>
</form>
</body>
</html>
