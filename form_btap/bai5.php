<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính Tiền Karaoke</title>
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
        $gio_bd = isset($_POST['gio_bd']) ? $_POST['gio_bd'] : '';
        $gio_kt = isset($_POST['gio_kt']) ? $_POST['gio_kt'] : '';
        $tien_thanhtoan = '';
        $thong_bao = '';
        if (isset($_POST['tinh'])) {
            if (is_numeric($gio_bd) && is_numeric($gio_kt)) {
                if ($gio_kt > $gio_bd) { //[cite: 3]
                    $tien_thanhtoan = 0;
                    for ($h = $gio_bd; $h < $gio_kt; $h++) {
                        if ($h >= 10 && $h < 17) {
                            $tien_thanhtoan += 20000; 
                        } elseif ($h >= 17 && $h < 24) {
                            $tien_thanhtoan += 45000; 
                        }
                    }
                } else {
                    $thong_bao = "Giờ kết thúc phải > Giờ bắt đầu";
                }
            }
        }
    ?>

    <form name="form_karaoke" method="POST" action="bai5.php">
        <table>
            <tr>
                <th colspan="3">TÍNH TIỀN KARAOKE</th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td><input type="text" name="gio_bd" value="<?php echo $gio_bd; ?>" required></td>
                <td>(h)</td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td><input type="text" name="gio_kt" value="<?php echo $gio_kt; ?>" required></td>
                <td>(h)</td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td><input type="text" name="tien_thanhtoan" value="<?php echo $tien_thanhtoan; ?>" readonly></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="tinh" value="Tính tiền">
                </td>
            </tr>
        </table>
        <?php if ($thong_bao != ''): ?>
            <p class="msg"><?php echo $thong_bao; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>