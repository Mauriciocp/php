<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>tabla
        </title>
    </head>
    <body>
        <?php
        echo "<table border=5>";
        $n = 1;
        for ($n1 = 1; $n1 <= 10; $n1++) {
            echo"<tr>";
            for ($n2 = 1; $n2 <= 10; $n2++) {
                echo "<td>", $n, "</td>";
                $n = $n + 1;
            }
            echo"</tr>";
        }

        echo "</table>";
            ?>        
</body>
</html>
