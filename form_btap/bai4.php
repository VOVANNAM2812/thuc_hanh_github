<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Thi Đại Học</title>
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
        $toan = isset($_POST['toan']) ? $_POST['toan'] : '';
        $ly = isset($_POST['ly']) ? $_POST['ly'] : '';
        $hoa = isset($_POST['hoa']) ? $_POST['hoa'] : '';
        $diem_chuan = isset($_POST['diem_chuan']) ? $_POST['diem_chuan'] : '';
        $tong_diem = '';
        $ket_qua = '';

        if (isset($_POST['xem_ket_qua'])) {
            if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa)) {
                $tong_diem = $toan + $ly + $hoa;
                if ($toan > 0 && $ly > 0 && $hoa > 0 && $tong_diem >= $diem_chuan) {
                    $ket_qua = "Đậu";
                } else {
                    $ket_qua = "Rớt";
                }
            } else {
                $ket_qua = "Điểm nhập không hợp lệ!";
            }
        }
    ?>

    <form name="form_thi" method="POST" action="bai4.php">
        <table>
            <tr>
                <th colspan="2">KẾT QUẢ THI ĐẠI HỌC</th>
            </tr>
            <tr>
                <td>Toán:</td>
                <td><input type="text" name="toan" value="<?php echo $toan; ?>" required></td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td><input type="text" name="ly" value="<?php echo $ly; ?>" required></td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td><input type="text" name="hoa" value="<?php echo $hoa; ?>" required></td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td><input type="text" name="diem_chuan" value="<?php echo $diem_chuan; ?>"></td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td><input type="text" name="tong_diem" value="<?php echo $tong_diem; ?>" readonly ></td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td><input type="text" name="ket_qua" value="<?php echo $ket_qua; ?>" readonly ></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="xem_ket_qua" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>