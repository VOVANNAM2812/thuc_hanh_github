<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh Toán Tiền Điện</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        table {
            background-color: #fcf4d9;
            border: 1px solid #ffcc66;
            width: 350px;
            border-collapse: collapse;
        }
        th {
            background-color: #ffda75;
            color: #993300;
            font-family: "Times New Roman", Times, serif;
            font-style: italic;
            font-size: 24px;
            padding: 10px;
        }
        td {
            padding: 8px 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 160px;
            padding: 3px;
            border: 1px solid #999;
        }
        input[readonly] {
            background-color: #ffcccc; 
            color: #b30000;/
        }
        .btn {
            background-color: #e6e6e6;
            border: 1px solid #999;
            padding: 3px 15px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        $ten_chu_ho = isset($_POST['ten_chu_ho']) ? $_POST['ten_chu_ho'] : '';
        $chi_so_cu = isset($_POST['chi_so_cu']) ? $_POST['chi_so_cu'] : '';
        $chi_so_moi = isset($_POST['chi_so_moi']) ? $_POST['chi_so_moi'] : '';
        $don_gia = isset($_POST['don_gia']) ? $_POST['don_gia'] : 20000;
        $so_tien_thanhtoan = '';

        if (isset($_POST['tinh'])) {
            if (is_numeric($chi_so_cu) && is_numeric($chi_so_moi) && $chi_so_moi >= $chi_so_cu) {
                $so_tien_thanhtoan = ($chi_so_moi - $chi_so_cu) * $don_gia; //
            } else {
                $so_tien_thanhtoan = "Chỉ số không hợp lệ!";
            }
        }
    ?>

    <form name="form_tiendien" method="POST" action="bai3.php">
        <table>
            <tr>
                <th colspan="3">THANH TOÁN TIỀN ĐIỆN</th>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="ten_chu_ho" value="<?php echo $ten_chu_ho; ?>" required></td>
                <td></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="chi_so_cu" value="<?php echo $chi_so_cu; ?>" required></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="chi_so_moi" value="<?php echo $chi_so_moi; ?>" required></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="don_gia" value="<?php echo $don_gia; ?>"></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="so_tien_thanhtoan" value="<?php echo $so_tien_thanhtoan; ?>" readonly ></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="tinh" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>