
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Diện Tích Hình Chữ Nhật</title>
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
        $chieu_dai = '';
        $chieu_rong ='';
        $dien_tich = '';

        if (isset($_POST['tinh'])) {
            $chieu_dai = $_POST['chieu_dai'];
            $chieu_rong = $_POST['chieu_rong'];
            if (is_numeric($chieu_dai) && is_numeric($chieu_rong)) {
                $dien_tich = $chieu_dai * $chieu_rong;
            } else {
                $dien_tich = "Dữ liệu không hợp lệ!";
            }
        }
    ?>
    <form name="form_hcn" method="POST" action="bai1.php">
        <table>
            <tr>
                <th colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="chieu_dai" value="<?php echo $chieu_dai; ?>" required></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="chieu_rong" value="<?php echo $chieu_rong; ?>" required></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dien_tich" value="<?php echo $dien_tich; ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Tính" class="btn">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>