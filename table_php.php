<html>
<body>
    <?php
        $x=$_GET['num'];
        $i=1;
        echo("<h3>Table of $x is :</h3><br>");
        echo"<table>";
        for($i=1;$i<=10;$i++)
        {
            $p = $x*$i; 
            echo"<tr>";
            echo("<td>$x<td> * <td>$i <td>= <td>$p<br>");
            echo"</tr>";
        }
        echo"</table>";
    ?>
</body>
</html>