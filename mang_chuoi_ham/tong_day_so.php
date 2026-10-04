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
        $chuoi_nhap = "";
        $tong = "";

        if (isset($_POST['tinh_tong'])) {
            $chuoi_nhap = trim($_POST['day_so']);
            $mang = explode(",", $chuoi_nhap);
            $n = count($mang);
            $tong = 0;
            for ($i = 0; $i < $n; $i++) {
                $tong += (float)trim($mang[$i]);
            }
        }
    ?>
    <form action="tong_day_so.php" method="POST">
        <table>
            <tr>
                <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
            </tr>
            <tr>
                <td >Nhập dãy số:</td>
                <td colspan="2">
                    <input type="text" name="day_so" value="<?php echo $chuoi_nhap; ?>" required>
                    <span class="note">(*)</span>
                </td>

            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tinh_tong" value="Tổng dãy số">
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td>
                    <input type="text" name="tong" value="<?php echo $tong; ?>" readonly>
                </td>
            </tr>
            <tr>
                    <td colspan="2" style="text-align: center;"><p> <span class="note">(*)</span> Các số được nhập cách nhau bằng dấu ','</p></td>
            </tr>
        </table>
    </form>
</body>
</html>