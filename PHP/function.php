<html>
    <head></head>
    <body>

        <h1>FUNCTION DEMO</h1>
        <?php
          function add(){
            $a=30;
            $b=40;
            $c=$a+$b;
            echo "result:".$c;
          }
          add();
        ?>

        <h1>Function with arguments</h1>
        <?php
         function sum($x,$y)
         {
            $c=$x+$y;
            echo "<br>result:".$c;
         }
         sum(10,20);
        ?>

        <h1>Function with return value</h1>
        <?php
         function mult($a,$b)
         {
            $c=$a*$b;
            return $c;
         }
          $c=mult(10,20);
          echo "<br>result:".$c;
        ?>

         <h1>Function with default value</h1>
        <?php
         function div($a,$b=3)
         {
            $c=$a/$b;
            return $c;
         }
          $c=div(100);
          echo "<br>result:".$c;
        ?>

        <h1>Function with datatype of return value</h1>
        <?php
         function divi($a,$b):int
         {
            $c=$a/$b;
            return $c;
         }
          $c=divi(10,2);
          echo "<br>result:".$c;
        ?>
      
    </body>
</html>