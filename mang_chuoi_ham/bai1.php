<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai1.php" method="post">
        Nhập n:
        <input type="number" name="n">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $n=trim($_POST['n']);
            echo "n = ".$n.'<br>';
            if(is_numeric($n) && $n> 0){
                $mang=[];
                $dem_chan = 0;
                $dem_nho_hon_100 = 0;
                $tong_am = 0;
                $vi_tri_khong = [];

                for ($i = 0; $i < $n; $i++) {
                    $mang[$i] = rand(-100, 100);
                    if ($mang[$i] % 2 == 0) {
                        $dem_chan++;
                    }                    
                    if ($mang[$i] < 100) {
                        $dem_nho_hon_100++;
                    }                    
                    if ($mang[$i] < 0) {
                        $tong_am += $mang[$i];
                    }                  
                    if ($mang[$i] == 0) {
                        $vi_tri_khong[] = $i;
                    }
                }
                echo "Mảng: " . implode(", ", $mang) . "<br>";
                echo "Số lượng số chẵn: " . $dem_chan . "<br>";
                echo "Số lượng số nhỏ hơn 100: " . $dem_nho_hon_100 . "<br>";
                echo "Tổng số âm: " .$tong_am. "<br>";
                echo "Vị trí các phần tử bằng 0: " . implode(", ", $vi_tri_khong) . "<br>";
                //sort
                $n= count($mang);
                for($i= 0; $i<$n-1; $i++){
                    for($j= $i+1; $j<$n; $j++){
                        if($mang[$i]>$mang[$j]){
                            $tam = $mang[$i];
                            $mang[$i] = $mang[$j];
                            $mang[$j] = $tam;
                        }
                    }
                }

                echo "Sau khi sắp xếp tăng dần: " . implode(", ", $mang) . "<br>";
            }
        }    
    ?>
</body>
</html>