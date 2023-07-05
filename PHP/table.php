<html>
    <body>
        <table border="1" style="width:70%">
            <tr>
                <td>n</td>
                <td>n^2</td>
                <td>n^3</td>
            </tr>    
        <?php
           $row=34;
          for($i=0;$i<=$row;$i++){
            ?>  
            <tr>
                <td>
                    <?php
                      echo $i;
                     ?>
                </td>
                <td>
                    <?php
                     echo $i*$i;
                     ?>
                </td>
                <td>
                    <?php
                     echo $i*$i*$i;
                     ?>
                </td>
            </tr> 
            <?php
             }
            ?>   
        </table> 
       
    </body>
</html>