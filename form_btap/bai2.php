
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Diện Tích Và Chu Vi Hình Tròn</title>
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
        define('PI', 3.14); 
        $ban_kinh = '';
        $dien_tich = '';
        $chu_vi = '';
        if (isset($_POST['tinh'])) {
            $ban_kinh = $_POST['ban_kinh'];
            if (is_numeric($ban_kinh) && $ban_kinh > 0) {
                $dien_tich = PI * $ban_kinh * $ban_kinh; 
                $chu_vi = 2 * PI * $ban_kinh;
            } else {
                $dien_tich = $chu_vi = "Bán kính không hợp lệ!";
            }
        }
    ?>

    <form name="form_hinhtron" method="POST" action="bai2.php">
        <table>
            <tr>
                <th colspan="2">DIỆN TÍCH và CHU VI HÌNH TRÒN</th>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="ban_kinh" value="<?php echo $ban_kinh; ?>" required></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dien_tich" value="<?php echo $dien_tich; ?>" readonly></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chu_vi" value="<?php echo $chu_vi; ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>