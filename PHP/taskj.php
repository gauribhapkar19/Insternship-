<html>
    <head> 
        <title>3 July Tasks</title>
    </head>
    
    <body>
        <h1>TASKS</h1>
        <?php
         function cube($a)
         {
            $b=$a*$a*$a;
            echo "RESULT=>>".$b;
         }
         cube(3);
        ?>

        <?php
         function circle($a)
         {
            $b=3.14*$a*$a;
            echo "RESULT=>>".$b;
         }
         circle(3);
        ?>

         <?php
         function max($a,$b)
         {
            if($a>$b){
            echo "RESULT Max=>>".$a;
            }
            else
            {
                echo "RESULT Max=>>".$b;
            }
         }
         max(26,34);
        ?>

        <?php
         function evenodd($a)
         {
            if($a%2==0){
            echo "RESULT EVEN=>>".$a;
            }
            else
            {
                echo "RESULT ODD=>>".$a;
            }
         }
         evenodd(26);
        ?>


    </body>
</html>
