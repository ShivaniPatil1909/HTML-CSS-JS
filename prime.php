<html>
	<body> 

		<?php
			$x = $_GET['num'];
			$n=$x;
            echo("<h4>Prime Numbers less than $x are : </h4><br>");
			if($x>=2 && $x>0)
			{
				for($i=2;$i<$x;$i++)
				{
					$n=$i;
					$count = 0;
					for($j=1;$j<=$n;$j++)
					{
						if($n%$j==0)
							$count++;
					}
					if($count == 2)
						echo("$n<br>");
				}
			}
		?>

</body>
</html>