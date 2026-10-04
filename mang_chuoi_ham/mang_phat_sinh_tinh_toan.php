<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phát sinh mảng và tính toán</title>
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
        $n = "";
        $mang_kq = "";
        $max = "";
        $min = "";
        $tong = "";

        function tao_mang($n) {
            $mang = array();
            for ($i = 0; $i < $n; $i++) {
                $mang[$i] = rand(0, 20);
            }
            return $mang;
        }

        function xuat_mang($mang) {
            return implode(" ", $mang); 
        }

        function tinh_tong($mang) {
            $tong = 0;
            for ($i = 0; $i < count($mang); $i++) {
                $tong += $mang[$i];
            }
            return $tong;
        }

        function tim_max($mang) {
            $max = $mang[0];
            for ($i = 1; $i < count($mang); $i++) {
                if ($mang[$i] > $max) {
                    $max = $mang[$i];
                }
            }
            return $max;
        }

        function tim_min($mang) {
            $min = $mang[0];
            for ($i = 1; $i < count($mang); $i++) {
                if ($mang[$i] < $min) {
                    $min = $mang[$i];
                }
            }
            return $min;
        }

        if (isset($_POST['submit'])) {
            $n = trim($_POST['n']);
            
            if (is_numeric($n) && $n > 0) {
                $mang = tao_mang($n);
                $mang_kq = xuat_mang($mang);
                $tong = tinh_tong($mang);
                $max = tim_max($mang);
                $min = tim_min($mang);
            }
        }
    ?>

    <form action="mang_phat_sinh_tinh_toan.php" method="post">
        <table>
            <tr>
                <th colspan="3">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
            </tr>
            <tr>
                <td style="width: 180px;">Nhập số phần tử:</td>
                <td>     
                    <input type="text" name="n" value="<?php echo $n; ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn-submit" name="submit" value="Phát sinh và tính toán">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" class="readonly-input" name="mang_kq" value="<?php echo $mang_kq; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input type="text" class="readonly-input" name="max" value="<?php echo $max; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td>
                    <input type="text" class="readonly-input" name="min" value="<?php echo $min; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td>
                    <input type="text" class="readonly-input" name="tong" value="<?php echo $tong; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><p>(<span class="note">Ghi chú:</span> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</p></td>
            </tr>
        </table>
    </form>
</body>
</html>