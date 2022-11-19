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
    .txtle {
        text-align: left;
        display: block;
    }
    .a-button {
        padding:2px 5px;
        border: 1px solid #767676;
        border-radius: 5px;
        background-color: #efefef;
        text-decoration: none;
        font-size: medium;
    }
    .a-button:visited {
        color: black;
    }
</style>
<body style="background-color: rgb(187,255,204);">
    <div style="font-size: 20px; line-height: 1cm;" class="txtal">
        <h2>CẬP NHẬT THÔNG TIN PHÒNG BAN</h2>
        <form action="xulycapnhat.php?IDPB='<?php echo $_GET['IDPB']?>'" method="GET">
            <div>
                <table style="display:inline-block">
                <?php
                    
                    require __DIR__ . '/connectSQL.php';
                    $link = connector();
                    $rs = mysqli_query($link,"Select * from phongban where IDPB='".$_GET['IDPB']."'");
                    $row = mysqli_fetch_array($rs);
                    echo "
                        <tr>
                            <td class='txtle'><label>Mã phòng ban: </label></td>
                            <td><input style='color:#888888' value='".$row[0]."' readonly></td>
                        </tr>
                        <tr>
                            <td class='txtle'><label>Tên phòng ban: </label></td>
                            <td><input name='Tenpb' value='".$row[1]."'></td>
                        </tr>
                        <tr>
                            <td class='txtle'><label>Mô tả: </label></td>
                            <td><input name='Mota' value='".$row[2]."'></td>
                        </tr>
                        "
                ?>
                </table>
            </div>
            <input type="submit" value="OK">
            <a class="a-button" href="./capnhatthongtin.php">Quay lại</a>
        </form>
    </div>
</body>
</html>