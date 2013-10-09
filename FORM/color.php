<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>color filas</title>
    </head>
    <body>
        <?php
        define(TAM, 10);
        echo "<Table border=1>";
        $n = 1;
        for ($n1 = 1; $n1 <= TAM; $n1++) 
        {
            If ($n1 % 2 == 0)
                echo "<tr bgcolor=#bdc3d6>";
            else
                echo"<tr>";
            for ($n2 = 1; $n2 <=TAM ; $n2++)
                {
                echo "<td>", $n, "</td>";
                $n = $n + 1;
            }
            echo"</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
