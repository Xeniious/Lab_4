<?php
		echo "<table>";
		$array1 = array();
		for($i = 0; $i <=100; $i++)
		{
			$array1[i]=array();
		}
		for($i = 0; $i <=100; $i++)
		{
			echo "<tr>";
			for($j = 0; $j <=100; $j++)
			{
				$array1[i][j] = i*j;
				echo "<td>".$array1[i][j]."</td>";
			}	
			echo "</tr>";
		}
		echo "</table>";
?>
