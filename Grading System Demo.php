<html>
<body>
		<?php		
				echo "<br><br>";
			$name = "Aquino";
			$grade = 59;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", You passed <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", For Remedials <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", You failed <br>";
			}			
		?>
</body>
</html>