<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: #dbe8dd;
            width: 450px;
            border-collapse: collapse;
        }
        th {
            background-color: #278b8b; 
            color: white;
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            font-style: italic; 
            padding: 10px;
        }
        td {
            padding: 8px 10px;
            font-size: 14px;
        }
        input[type="text"] {
            width: 220px;
            padding: 4px;
            border: 1px solid #8f8d8d;
        }
        .readonly-input {
            background-color: #b4ecb4;
            font-weight: bold;
            color: black;
        }
        .btn-submit {
            background-color: #d9d9bd; 
            border: 1px solid #8f8b8b;
            padding: 5px 15px;
            cursor: pointer;
        }
        .note {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $nhap_mang = "";
        $chuoi_tang = "";
        $chuoi_giam = "";
        function hoan_vi(&$a, &$b){
            $tam = $a;
            $a = $b;
            $b = $tam;
        }
        function SX_tang_dan($mang){
            $n= count($mang);
            for($i= 0; $i<$n-1; $i++){
                for($j= $i+1; $j<$n; $j++){
                    if($mang[$i]>$mang[$j]){
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return $mang;
        }
        function SX_giam_dan($mang){
            $n= count($mang);
            for($i= 0; $i<$n-1; $i++){
                for($j= $i+1; $j<$n; $j++){
                    if($mang[$i]<$mang[$j]){
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return $mang;
        }
        if(isset($_POST['submit'])){
            $nhap_mang = trim($_POST['mang']);
            $mang = explode(",", $nhap_mang);
            for ($i = 0; $i < count($mang); $i++) {
                $mang[$i] = (int)trim($mang[$i]);
            }
            $mang_tang = SX_tang_dan($mang);
            $mang_giam = SX_giam_dan($mang);

            $chuoi_tang = implode(", ", $mang_tang);
            $chuoi_giam = implode(", ", $mang_giam);
        }
    ?>

    <form action="mang_sap_xep.php" method="post">
        <table>
            <tr>
                <th colspan="2">SẮP XẾP MẢNG</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td colspan="2">
                    <input type="text" name="mang" value="<?php echo $nhap_mang ?>">
                    <span class="note">(*)</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td >
                    <input type="submit" name="submit" value="Sắp xếp tăng/giảm">
                </td>
            </tr>
            <tr>
                <td><span class="note">Sau khi sắp xếp:</span></td>
            </tr>
            <tr>
                <td>Tăng dần:</td>
                <td>
                    <input type="text" name="tang_dan" value="<?php echo $chuoi_tang; ?>" readonly>
                </td>
            </tr>

            <tr>
                <td>Giảm dần:</td>
                <td>
                    <input type="text" name="giam_dan" value="<?php  echo $chuoi_giam;?>" readonly>
                </td>
            </tr>
            <tr>
                    <td colspan="2" style="text-align: center;"><p> <span class="note">(*)</span> Các số được nhập cách nhau bằng dấu ","</p></td>
            </tr>
        </table>
    </form>
</body>
</html>