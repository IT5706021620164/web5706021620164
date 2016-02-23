<html>
<head><title>โปรแกรมrandom</title>
  <meta charset="utf-8">
</head>
<body>
  <?php
// สุ่มค่า
  for ($r=0 ; $r<52 ; $r++) {
    $number[$r] = rand(1,52);
  }

// ตรวจสอบ
  for($r=0 ; $r<52 ; $r++){
    for($j=0 ; $j<$r ; $j++){
      if($number[$r] == $number[$j]){
        $number[$r] = rand(1,52);
        $j=-1; // Reset Check
      }
    }
  }


$count = 0;
echo "<table border = 1 cellpadding = 10 align = center>";
  for ($r=0 ; $r<13 ; $r++) {
    echo "<tr>";
    for ($c=0 ; $c<4 ; $c++) {
      echo "<td align = center>" . $number[$count] . "</td>";
      $count++;
    }
    echo "</tr>";
  }
echo "</table>";
   ?>
</body>
</html>
