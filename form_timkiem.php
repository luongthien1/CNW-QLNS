<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .txtal {
            text-align: center;
            display: block;
        }
    .a-button {
        margin-top: 10px;
        padding:5px 10px;
        border: 2px solid black;
        background-color: #999999;
        text-decoration: none;
    }
    .a-button:visited {
        color: black;
        font-size: larger;
    }
</style>
<body style="background-color:rgb(187,255,204);">
    <div>
    <h2 class="txtal">KẾT QUẢ TÌM KIẾM</h2>
    <?php
        $column = $_REQUEST["rabu"];
        $text = $_REQUEST["text"];
        
        require __DIR__ . '/connectSQL.php';
        $link = connector();
        $rs = mysqli_query($link,"Select * from nhanvien where $column='$text'");
        if (mysqli_num_rows($rs)==0) echo '<h3 style="color: red">Không có kết quả nào.</h3>';
        else echo '<h3 style="color: black">Có '.mysqli_num_rows($rs).' kết quả.</h3>';
        echo '<table border = "1" width="100%">';
        echo '<h2> DỮ LIỆU BẢNG NHÂN VIÊN (KẾT QUẢ TÌM KIẾM)</h2>';
        echo '<tr><th> IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th></tr>';
        while ($row = mysqli_fetch_array($rs))
        {
            echo 
                '<tr>
                    <td>'.$row['IDNV'].'</td>
                    <td>'.$row['Hoten'].'</td>
                    <td>'.$row['IDPB'].'</td>
                    <td>'.$row['Diachi'].'</td>
                </tr>';
        }
        echo '</table>';
    ?>
    <br>
    <a class="a-button" href="./timkiem.php">Quay lại</a>
    </div>
</body>
</html>