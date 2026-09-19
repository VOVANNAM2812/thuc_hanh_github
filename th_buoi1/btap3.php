<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo "Cau 3:", "<br>";
        function kiemTraSNT($n){
            if($n<2) return 0;
            $demSoUoc = 0;
            for($i= 1; $i<$n; $i++){
                if($n % $i == 0){
                    $demSoUoc++;
                }
            }
            if($demSoUoc == 1) return 1;
            else return 0;
        }
		$n = rand(-100, 100);
        echo "n=", $n,"<br>";
		if($n <=0){
			return;
		}else{
            echo "3.1: Các ước số của $n là: ";
			for($i = 1; $i <= $n; $i++){
				if($n % $i == 0){
					echo "$i ";
				}
			}
            echo "<br>";

            echo "3.2: ";

            if(kiemTraSNT($n) == 1){
                echo "$n là số nguyên tố";
            }else{
                echo "$n không phải là số nguyên tố";
            }
            echo "<br>";

            echo "3.3: Tổng các số nguyên tố nhỏ hơn $n là: ";
            $tongSNT = 0;
            for($i = 0; $i < $n; $i++){
                if(kiemTraSNT($i) == 1){
                    $tongSNT += $i;
                }
            }
            echo $tongSNT;
            echo "<br>";

            if(sqrt($n)==(int)sqrt($n))
                echo "3.4: $n là số chính phương";
		}
      
	?>
</body>
</html>