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
        a {
            text-decoration: none;
        }
</style>
<body style="background-color: rgb(187,255,204);">
    <div class="txtal">
        <h2>DỮ LIỆU BẢNG PHÒNG BAN</h2>
        <?php
            session_start();
            if (!isset($_SESSION["username"])) 
                header("location: ./Login.php");
            
            require __DIR__ . '/connectSQL.php';
            $link = connector();
            $db_selected = mysqli_select_db($link,'dulieu');
            $rs = mysqli_query($link,"Select * from phongban");
            echo '<form action="xulycapnhat.php"><table border = "1" width="100%">';
            echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th><th>Cập nhật</th></tr>';
            while ($row = mysqli_fetch_array($rs))
            {
                echo 
                    '<tr>
                        <td>'.$row['IDPB'].'</td>
                        <td>'.$row['Tenpb'].'</td>
                        <td>'.$row['Mota'].'</td>
                        <td> <a href="/PHP/form_capnhatthongtin.php?IDPB='.$row['IDPB'].'">Thay đổi  <img src="edit-icon.png" style="height:15px"></a> </td>
                    </tr>';
            }
            echo '</form></table>';
            mysqli_free_result($rs);
            mysqli_close($link);
        ?>
        
    </div>
</body>
</html>
