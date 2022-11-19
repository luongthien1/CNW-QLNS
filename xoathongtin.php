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
</style>
<body style="background-color: rgb(187,255,204);">
    <div class="txtal">
        <h2>DỮ LIỆU BẢNG NHÂN VIÊN</h2>
        <?php
            session_start();
            if (!isset($_SESSION["username"])) 
                header("location: ./Login.php");
            
            require __DIR__ . '/connectSQL.php';
            $link = connector();
            $rs = mysqli_query($link,"Select * from nhanvien");
            echo '<form action="xulyxoathongtin.php"><table border = "1" width="100%">';
            echo '<tr><th> IDNV</th><th>Hoten</th><th>Diachi</th><th>Xóa</th></tr>';
            while ($row = mysqli_fetch_array($rs))
            {
                echo 
                    "<tr>
                        <td>".$row['IDNV']."</td>
                        <td>".$row['Hoten']."</td>
                        <td>".$row['Diachi']."</td>
                        <td>
                        <input type='submit' name='".$row['IDNV']."' value='xxxx'></td>
                    </tr>";
            }
            echo '</table></form>';
            mysqli_free_result($rs);
            mysqli_close($link);
        ?>
    </div>
</body>
</html>