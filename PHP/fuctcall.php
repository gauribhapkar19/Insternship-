<?php
 function demo($n)
 {
    $n=30;
    echo "<br>In Function val=>>".$n;
 }
  $n=50;
  echo "before call=>>".$n;

  demo($n);

  echo "<br>after call=>>".$n;
?>