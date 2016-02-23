<html>
  <head>
    <meta charset="utf-8">
    <title> โปรแกรมแสดงผลลัพธ์ </title>
  </head>
  <body>
  <?php

        $o=1;
    echo "<table align='center' border='4' width='300'>";
    for($r=1 ; $r<=13 ; $r++){
       echo "<tr>";
       for ($c=1 ; $c<=4 ; $c++) {
         if ($o<=52) {
           echo "<td align='center'>" . rand(1,$o) . "</td>";
           $o++;

     }
    }
    echo "</tr>";
    }
    echo "</table>";
   ?>
   <a href='HWR.php'> Back </a>

  </body>
</html>
