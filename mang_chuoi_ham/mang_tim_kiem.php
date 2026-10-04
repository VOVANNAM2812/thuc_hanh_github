<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm mảng</title>
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
        $so_can_tim = "";
        $chuoi_mang = "";
        $ket_qua = "";

        function tim_kiem($mang, $gia_tri) {
            $n = count($mang);
            for ($i = 0; $i < $n; $i++) {
                if ((int)trim($mang[$i]) === (int)$gia_tri) {
                    return $i;
                }
            }
            return -1;
        }

        if (isset($_POST['submit'])) {
            $nhap_mang = trim($_POST['nhap_mang']);
            $so_can_tim = trim($_POST['so_can_tim']);

            if ($nhap_mang !== "" && is_numeric($so_can_tim)) {
                $mang = explode(",", $nhap_mang);
            
                for ($i = 0; $i < count($mang); $i++) {
                    $mang[$i] = trim($mang[$i]);
                }
                $chuoi_mang = implode(", ", $mang);

                $vi_tri = tim_kiem($mang, $so_can_tim);

                if ($vi_tri != -1) {
                    $ket_qua = "Tìm thấy $so_can_tim tại vị trí thứ $vi_tri của mảng";
                } else {
                    $ket_qua = "Không tìm thấy $so_can_tim trong mảng";
                }
            }
        }
    ?>

    <form action="mang_tim_kiem.php" method="POST">
        <table>
            <tr>
                <th colspan="2">TÌM KIẾM</th>
            </tr>
            <tr>
                <td style="width: 130px;">Nhập mảng:</td>
                <td>
                    <input type="text" name="nhap_mang" value="<?php echo $nhap_mang; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input type="text" name="so_can_tim" style="width: 80px;" value="<?php echo $so_can_tim; ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn-submit" name="submit" value="Tìm kiếm">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" class="readonly-input" name="mang_kq" value="<?php echo $chuoi_mang; ?>" readonly>
                </td>
            </tr>
            <tr >
                <td>Kết quả tìm kiếm:</td>
                <td>
                    <input type="text" style="color: red;" class="txt-result" name="ket_qua" value="<?php echo $ket_qua; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="footer-note">
                    (Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
                </td>
            </tr>
        </table>
    </form>
</body>
</html>