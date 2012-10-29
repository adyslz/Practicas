<?php
	$cant = $_GET["noTablas"];
	$mult = $_GET["max"];
	for($i=1; $i<=$cant; $i++){
		echo '<table border="1">';
		echo '<caption>Tabla del ',$i,'</caption>';
		for($j=1; $j<=$mult; $j++){
			echo '<tr>
			 	  <td>',$j,' * ',$i,'</td> 
				  <td>',$i*$j,'</td> 
				  </tr>';
		}
		echo '</table><br/>';
	}
?>

