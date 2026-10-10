<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quanly_ban_sua";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn){
            die("Conection failed: ".mysqli_connect_error());
        }
        $result1_3_1 = mysqli_query($conn, "Select ten_hang_sua, dia_chi, dien_thoai from hang_sua");
        
        $result1_3_2 = mysqli_query($conn,"Select ten_khach_hang, dia_chi, dien_thoai from khach_hang ORDER BY ten_khach_hang ASC");

        $result1_3_3 = mysqli_query($conn,"Select ten_khach_hang, phai, dia_chi, dien_thoai from khach_hang ORDER BY phai ASC");

        $result1_3_4 = mysqli_query($conn,"Select ten_sua,trong_luong,don_gia from sua ORDER BY ten_sua ASC, don_gia DESC");

        $query = "Select ten_sua,trong_luong,don_gia,tp_dinh_duong from sua where ten_sua LIKE 'S%'";
        $result1_3_5 = mysqli_query($conn,$query);

        $query =  "Select ma_hang_sua, ten_hang_sua, dia_chi, dien_thoai from hang_sua where ma_hang_sua like '%M'";
        $result1_3_6 = mysqli_query($conn,$query);

        $query = "Select * from sua where ten_sua LIKE '%grow%'";
        $result1_3_7 = mysqli_query($conn,$query);

        $query =  "Select ten_sua,don_gia,trong_luong from sua where don_gia >= 100000 ORDER BY ten_sua DESC";
        $result1_3_8 = mysqli_query($conn,$query);

        $query =  "Select  ma_loai_sua, ma_hang_sua,ten_sua,tp_dinh_duong, loi_ich from sua where ma_loai_sua = 'SC' and ma_hang_sua = 'VNM' ORDER BY ten_sua DESC";
        $result1_3_9 = mysqli_query($conn,$query);

        $query = "Select * from sua where trong_luong>=900 or ma_hang_sua = 'DS'";
        $result1_3_10 = mysqli_query($conn,$query);

        $query = "Select * from sua where don_gia>=100000 and don_gia<=150000";
        $result1_3_11 = mysqli_query($conn,$query);

        $query = "Select * from sua where (ma_hang_sua = 'DM' or ma_hang_sua = 'DL' or ma_hang_sua = 'DS') and trong_luong>=800 ORDER by trong_luong ASC";
        $result1_3_12 = mysqli_query($conn,$query);

        $query = "Select * from sua where (ma_loai_sua ='SD') or don_gia <=12000";
        $result1_3_13 = mysqli_query($conn,$query);

        $query = "Select * from khach_hang where ten_khach_hang like 'N%'";
        $result1_3_14 = mysqli_query($conn,$query);

        $query = "Select * from hang_sua where ten_hang_sua not like '%M%'";
        $result1_3_15 = mysqli_query($conn,$query);

        $query = "Select ten_sua, tp_dinh_duong from sua where tp_dinh_duong like '%canxi%' and tp_dinh_duong like '%vitamin%'  ";
        $result1_3_16 = mysqli_query($conn,$query);

        $query = "Select * from sua where trong_luong = 180 or trong_luong = 200 or trong_luong = 900";
        $result1_3_17 = mysqli_query($conn,$query);

        $query = "Select * from sua where trong_luong != 400 and trong_luong != 800 and trong_luong != 900";
        $result1_3_18 = mysqli_query($conn,$query);

        $query = "Select ten_sua, don_gia, tp_dinh_duong from sua ORDER BY don_gia DESC LIMIT 10";
        $result1_3_19 = mysqli_query($conn,$query);

        $query = "Select ten_sua, trong_luong from sua where ma_hang_sua = 'VNM' ORDER BY trong_luong DESC LIMIT 3";
        $result1_3_20 = mysqli_query($conn,$query);

        $query = "Select ten_sua, loi_ich, don_gia from sua where ma_hang_sua = 'VNM' ORDER BY don_gia DESC";
        $result1_3_21 = mysqli_query($conn,$query);

        $query = "Select ten_sua, trong_luong, loi_ich from sua where ma_hang_sua = 'AB' ORDER BY trong_luong ASC";
        $result1_3_22 = mysqli_query($conn,$query);
    ?>  
    <p>1.3.1</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên hãng sữa</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_1) != 0){
                    while($row = mysqli_fetch_array($result1_3_1)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_1);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_1);
            ?>
        </table>
    </div>

    <p>1.3.2</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_2) != 0){
                    while($row = mysqli_fetch_array($result1_3_2)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_2);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_2);
            ?>
        </table>
    </div>

    <p>1.3.3</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên khách hàng</th>
                <th>Phái</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_3) != 0){
                    while($row = mysqli_fetch_array($result1_3_3)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_3);$i++){
                                if($i==1){
                                    if($row[$i] == 0){
                                        $val = "Nam";
                                    }else{
                                        $val = "Nữ";
                                    }
                                }else{
                                    $val = $row[$i];
                                }
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_3);
            ?>
        </table>
    </div>

    <p>1.3.4</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_4) != 0){
                    while($row = mysqli_fetch_array($result1_3_4)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_4);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_4);
            ?>
        </table>
    </div>

    <p>1.3.5</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_5) != 0){
                    while($row = mysqli_fetch_array($result1_3_5)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_5);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_5);
            ?>
        </table>
    </div>

    <p>1.3.6</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Mã hãng sữa</th>
                <th>Tên hãng sữa</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_6) != 0){
                    while($row = mysqli_fetch_array($result1_3_6)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_6);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_6);
            ?>
        </table>
    </div>

    <p>1.3.7</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_7) != 0){
                    while($row = mysqli_fetch_array($result1_3_7)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_7);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_7);
            ?>
        </table>
    </div>

    <p>1.3.8</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Đơn giá</th>
                <th>Trọng lượng</th>

            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_8) != 0){
                    while($row = mysqli_fetch_array($result1_3_8)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_8);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_8);
            ?>
        </table>
    </div>

    <p>1.3.9</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Mã loại sữa</th>
                <th>Mã hãng sữa</th>
                <th>Tên Sữa</th>
                <th>Đơn giá</th>
                <th>Trọng lượng</th>

            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_9) != 0){
                    while($row = mysqli_fetch_array($result1_3_9)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_9);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_9);
            ?>
        </table>
    </div>

    <p>1.3.10</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_10)!=0){
                     while($row = mysqli_fetch_array($result1_3_10)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_10);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_10);
            ?>
        </table>
    </div>

    <p>1.3.11</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_11)!=0){
                     while($row = mysqli_fetch_array($result1_3_11)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_11);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_11);
            ?>
        </table>
    </div>

    <p>1.3.12</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_12)!=0){
                     while($row = mysqli_fetch_array($result1_3_12)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_12);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_12);
            ?>
        </table>
    </div>

     <p>1.3.13</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_13)!=0){
                     while($row = mysqli_fetch_array($result1_3_13)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_13);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_13);
            ?>
        </table>
    </div>

    <p>1.3.14</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_14) != 0){
                    while($row = mysqli_fetch_array($result1_3_14)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_14);$i++){
                                if($i==2){
                                    if($row[$i] == 0){
                                        $val = "Nam";
                                    }else{
                                        $val = "Nữ";
                                    }
                                }else{
                                    $val = $row[$i];
                                }
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_14);
            ?>
        </table>
    </div>

    <p>1.3.15</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Mã hãng sữa</th>
                <th>Tên hãng sữa</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_15) != 0){
                    while($row = mysqli_fetch_array($result1_3_15)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_15);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_15);
            ?>
        </table>
    </div>

    <p>1.3.16</p>
    <div style = "overflow-x:auto;">
        <table>
            <tr>
                <th>Tên  sữa</th>
                <th>Thành phần dinh dưỡng</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_16) != 0){
                    while($row = mysqli_fetch_array($result1_3_16)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_16);$i++){
                                $val = $row[$i];
                                echo "<td>".$val."</td>";
                            }
                        echo "</tr>";
                    }
                }
                mysqli_free_result($result1_3_16);
            ?>
        </table>
    </div>

    <p>1.3.17</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_17)!=0){
                     while($row = mysqli_fetch_array($result1_3_17)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_17);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_17);
            ?>
        </table>
    </div>

    <p>1.3.18</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Mã sữa</th>
                <th>Tên Sữa</th>
                <th>Mã hãng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
                <th>Lợi ích</th>
                <th>Hình</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_18)!=0){
                     while($row = mysqli_fetch_array($result1_3_18)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_18);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_18);
            ?>
        </table>
    </div>

    <p>1.3.19</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Đơn giá</th>
                <th>Thành phần dinh dưỡng</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_19)!=0){
                     while($row = mysqli_fetch_array($result1_3_19)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_19);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_19);
            ?>
        </table>
    </div>

    <p>1.3.20</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Trọng lượng</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_20)!=0){
                     while($row = mysqli_fetch_array($result1_3_20)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_20);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_20);
            ?>
        </table>
    </div>

    <p>1.3.21</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Lợi ích</th>
                <th>Đơn giá</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_21)!= 0){
                     while($row = mysqli_fetch_array($result1_3_21)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_21);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_21);
            ?>
        </table>
    </div>

    <p>1.3.22</p>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Tên Sữa</th>
                <th>Trọng lượng</th>
                <th>Lợi ích</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result1_3_22)!= 0){
                     while($row = mysqli_fetch_array($result1_3_22)){
                        echo "<tr>";
                            for($i=0;$i<mysqli_num_fields($result1_3_22);$i++){
                                if($i == 8){
                                    echo "<td><img src='../Hinh_sua/" . $row[$i] . "' width='50' height='50' alt='Logo sữa'></td>";
                                } else {
                                    echo "<td>" . $row[$i] . "</td>";
                                }
                            }
                        echo "</tr>";
                    }
                }
            mysqli_free_result($result1_3_22);
            mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>