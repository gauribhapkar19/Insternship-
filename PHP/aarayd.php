<?php
 $color = array("red","green","blue");
 echo $color[2];

 for($i=0;$i<3;$i++)
 {
    echo "<br>".$color[$i];
 }
?>

<h1>Associative array</h1>
<?php
 $age = array("gauri"=>"18","sami"=>"19","vaishi"=>"17");
 echo $age["sami"];

 foreach($age as $x =>$x_value)
 {
    echo "<br>".$x.":".$x_value;
 }
?>