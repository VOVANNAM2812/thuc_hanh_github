<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
</head>
<body>
    <div class="box">
        <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
        <form name="form_pheptinh" method="POST" action="bai6_7_ket_qua.php">
            <p>
                <strong>Chọn phép tính:</strong>
                <input type="radio" name="phep_tinh" value="cong" checked> Cộng
                <input type="radio" name="phep_tinh" value="tru"> Trừ
                <input type="radio" name="phep_tinh" value="nhan"> Nhân
                <input type="radio" name="phep_tinh" value="chia"> Chia
            </p>
            <p>Số thứ nhất: <input type="text" name="so1" required></p>
            <p>Số thứ nhì: <input type="text" name="so2" required></p>
            <p align="center"><input type="submit" name="tinh" value="Tính"></p>
        </form>
    </div>
</body>
</html>