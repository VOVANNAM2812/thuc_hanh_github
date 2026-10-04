<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
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
        $nam_duong_lich = "";
        $nam_am_lich = "";
        $hinh_anh = "";
        $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
        
        if (isset($_POST['submit'])) {
            $nam_duong_lich = trim($_POST['nam_duong_lich']);}
        if(is_numeric($nam_duong_lich) && $nam_duong_lich > 0){
                $nam = $nam_duong_lich - 3;
                $can = $nam % 10;
                $chi = $nam % 12;
                $nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
                $hinh_anh = "<img src='12congiap/$mang_hinh[$chi]' alt='Hình ảnh $nam_am_lich' width='100px'>";
        }
    ?>

    <form action="mang_nam_am_lich.php" method="post">
        <!-- Năm dương lịch: <input type="text" name="nam_duong_lich" value="<?php echo $nam_duong_lich; ?>" required>
        <input type="submit" name="submit" value="=>">
        Năm âm lịch: <input type="text" name="nam_am_lich" value="<?php echo $nam_am_lich; ?>" readonly> -->
        <table>
            <tr>
                <th colspan="3">TÍNH NĂM ÂM LỊCH</th>
            </tr>
            <tr>
                <td>Năm dương lịch</td>
                <td></td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td>     
                    <input type="text" name="nam_duong_lich" value="<?php echo $nam_duong_lich; ?>" required>
                </td>
                <td>
                    <input type="submit" name="submit" style="color: red;" value="=>">
                </td>
                <td>
                    <input type="text" name="nam_am_lich" style="color: red;" value="<?php echo $nam_am_lich; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">
                    <?php echo $hinh_anh; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>