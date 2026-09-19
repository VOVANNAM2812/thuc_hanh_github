<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>baitap</title>

</head>
<body>
	
	<?php
		echo "Câu 1: Viết 1 trang web nhận một giá trị ngẫu nhiên là số tự nhiên N
có giá trị từ 1 → 100. Hãy xuất ra trình duyệt những số chẵn
nằm trong khoảng 1 → N đó.", "<br>";
		$n = rand(0, 100);
		echo "n=", $n,"<br>";
		for($x = 0; $x <= $n; $x++){
			if($x % 2 == 0){
				echo "$x ";
			}
		}
		echo "<br>";
	?>
</body>
</html>