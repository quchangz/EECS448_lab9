  <html>
	<head>
		<title>Multiplication table</title>
	</head>
	<body>
	<?php
		echo "<table>";
			for($i=0;$i<=100;$i++)
			{
				echo "<tr>";
				for ($j=0;$j<=100;$j++)
				{
					
					if($i==0&&$j==0)
					{
						echo "<td></td>";
						continue;
					}
					if($i==0)
					{
						echo "<td>" .$j. "</td>";
					}
					else if ($j==0)
					{
						echo "<td>" .$i. "</td>";
					}
					else
					{
						echo "<td>" .$j*$i. "</td>";
					}
					
				}
				echo "</tr>";	
			}
		echo"</table>";
	?>
	</body>
</html>