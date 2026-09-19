<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    	<style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
</head>
<body>
    <table>
		<tr>
			<?php 
				for($i = 1; $i <= 10; $i++){
					echo "<th>Chương $i</th>";
				}
			?>
		</tr>
		<tr>
			<?php
				for($i =1; $i<=10;$i++){
                    for($j = 1; $j <= 10; $j++){
                        echo "<td>$i x $j = " . ($i * $j) . "</td>";
                    }
                    echo "</tr><tr>";
                } 
			 ?>
		</tr>
	</table>
	<!-- <?php
	echo "Cau 2:", "<br>";
		for($i = 1; $i <= 10; $i++){
			for($j = 1; $j <=10; $j++){
				echo $i, " x ", $j, " = ", $i*$j;
				echo "<br>";
			}
		}
	?> -->

</body>
</html>