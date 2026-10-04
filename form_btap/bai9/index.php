<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <nav>
        <a href="index.php?page=trangchu">Trang chủ</a>
        <a href="index.php?page=gioithieu">Giới thiệu</a>
        <a href="index.php?page=tintuc">Tin tức</a>
        <a href="index.php?page=lienhe">Liên hệ</a>
        <a href="index.php?page=diendan">Diễn đàn</a>
    </nav>
    <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'trangchu';
            $danh_sach_trang = array('trangchu', 'gioithieu', 'tintuc', 'lienhe', 'diendan');
            if (in_array($page, $danh_sach_trang)) {
                include($page . ".php");
            }
        ?>
</body>
</html>