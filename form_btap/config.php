
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Config</title>
</head>
<body>
    <?php
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $study = isset($_POST['study']) ? implode(", ", $_POST['study']) : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
    ?>

    <p>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:</p>
    <p>Họ tên: <?php echo $fullname; ?></p>
    <p>Address: <?php echo $address; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <p>Country: <?php echo $country; ?></p>
    <p>Study: <?php echo $study; ?></p>
    <p>Note: <?php echo $note; ?></p>
    
    <button onclick="window.history.back();">Quay về</button>
</body>
</html>