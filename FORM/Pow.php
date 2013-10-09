<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pow</title>
    </head>
    <body>
        <?php
       define (TAM,10);
               function potencia ($v1,$v2)
       {
           $rdo=pow ($v1,$v2);
           return $rdo;     
           }
           echo "<table border=1>";
           for ($n1 = 1; $n1 <= TAM; $n1++) 
           {
             echo "<tr>";
             for ($n2 = 1; $n2 <= TAM; $n2++)       
             echo "<td>".potencia ($n1,$n2)."</td>";
         echo "</tr>";
           }
           echo "</table>";
        ?>
    </body>
</html>
