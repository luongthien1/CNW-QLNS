<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .a-button {
        padding:5px 10px;
        border: 1px solid #767676;
        border-radius: 5px;
        background-color: #efefef;
        text-decoration: none;
    }
    .a-button:visited {
        color: black;
    }
</style>
<body style="background-color: rgb(187,255,204);">
    <div style="padding: 10px; border: 1px solid black">
        <?php
            session_start();
            if (!isset($_SESSION['username']))
                header("location: ./Login.php");
        ?>
        <div style="margin: 20px 0px 0px 40px;">
            <div><?php echo "Tài khoản người dùng:  ".$_SESSION['username']; ?></div>
            <br>
            <div><?php echo "<a href='./Logout.php'><button>Đăng xuất</button></a>"; ?></div>
        </div>
    </div>
    <div style="padding: 10px; border: 1px solid black; margin-top:10px">
        <div >
            <a class="a-button" href="./xemthongtinNV.php">Xem thông tin nhân viên</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./xemthongtinPB.php">Xem thông tin phòng ban</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./timkiem.php">Tìm kiếm</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./capnhatthongtin.php">Cập nhật</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./xoathongtin.php">Xóa thông tin nhân viên</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./xoatatca.php">Xóa nhiều nhân viên</a>
        </div>
        <div style="margin-top: 20px;">
            <a class="a-button" href="./chenthongtin.php">Thêm dữ liệu nhân viên và phòng ban</a>
        </div>
    </div>
</body>
</html>
