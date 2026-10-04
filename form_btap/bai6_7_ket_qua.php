<?php
function cong($a, $b) { return $a + $b; }
function tru($a, $b) { return $a - $b; }
function nhan($a, $b) { return $a * $b; }
function chia($a, $b) { return $b != 0 ? $a / $b : "Không thể chia cho 0"; }

$so1 = isset($_POST['so1']) ? $_POST['so1'] : '';
$so2 = isset($_POST['so2']) ? $_POST['so2'] : '';
$phep_tinh = isset($_POST['phep_tinh']) ? $_POST['phep_tinh'] : '';

if (!is_numeric($so1) || !is_numeric($so2) || ($phep_tinh == 'chia' && $so2 == 0)) {
    echo "<script>alert('Dữ liệu không hợp lệ hoặc chia cho 0!'); window.history.back();</script>";
    exit();
}

$ten_pt = '';
$ket_qua = 0;

switch ($phep_tinh) {
    case 'cong': $ten_pt = 'Cộng'; $ket_qua = cong($so1, $so2); break;
    case 'tru': $ten_pt = 'Trừ'; $ket_qua = tru($so1, $so2); break;
    case 'nhan': $ten_pt = 'Nhân'; $ket_qua = nhan($so1, $so2); break;
    case 'chia': $ten_pt = 'Chia'; $ket_qua = chia($so1, $so2); break;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Phép Tính</title>
</head>
<body>
    <div class="box">
        <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
        <p><strong>Chọn phép tính:</strong> <?php echo $ten_pt; ?></p>
        <p>Số 1: <input type="text" value="<?php echo $so1; ?>" readonly></p>
        <p>Số 2: <input type="text" value="<?php echo $so2; ?>" readonly></p>
        <p>Kết quả: <input type="text" value="<?php echo $ket_qua; ?>" readonly></p>
        <p><a href="javascript:window.history.back(-1);">Trở về trang trước</a></p>
    </div>
</body>
</html>