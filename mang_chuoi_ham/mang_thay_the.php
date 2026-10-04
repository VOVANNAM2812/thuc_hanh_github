<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế phần tử mảng</title>
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
    $gia_tri_cu = "";
    $gia_tri_moi = "";
    $chuoi_mang_cu = "";
    $chuoi_mang_moi = "";

    function thay_the($mang, $cu, $moi) {
        $n = count($mang);
        for ($i = 0; $i < $n; $i++) {
            if ($mang[$i] == $cu) {
                $mang[$i] = $moi;
            }
        }
        return $mang;
    }

    if (isset($_POST['submit'])) {
        $nhap_mang = trim($_POST['nhap_mang']);
        $gia_tri_cu = trim($_POST['gia_tri_cu']);
        $gia_tri_moi = trim($_POST['gia_tri_moi']);
        
        $mang = explode(",", $nhap_mang);
        
        for ($i = 0; $i < count($mang); $i++) {
            $mang[$i] = trim($mang[$i]);
        }

        $chuoi_mang_cu = implode(" ", $mang);
        $mang_moi = thay_the($mang, $gia_tri_cu, $gia_tri_moi);
        $chuoi_mang_moi = implode(" ", $mang_moi);
    }
?>

    <form action="mang_thay_the.php" method="POST">
        <table>
            <tr>
                <th colspan="2">THAY THẾ</th>
            </tr>
            <tr>
                <td style="width: 150px;">Nhập các phần tử:</td>
                <td>
                    <input type="text" name="nhap_mang" value="<?php echo $nhap_mang; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input type="text" name="gia_tri_cu" value="<?php echo $gia_tri_cu; ?>" required style="width: 100px;">
                </td>
            </tr>
            <tr>
                <td>Giá trị thay thế:</td>
                <td>
                    <input type="text" name="gia_tri_moi" value="<?php echo $gia_tri_moi; ?>" required style="width: 100px;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn-submit" name="submit" value="Thay thế">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input type="text" class="readonly-input" name="mang_cu" value="<?php echo $chuoi_mang_cu; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế:</td>
                <td>
                    <input type="text" class="readonly-input" name="mang_moi" value="<?php echo $chuoi_mang_moi; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><p>(<span class="note">Ghi chú:</span> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</p></td>
            </tr>
        </table>
    </form>

</body>
</html>