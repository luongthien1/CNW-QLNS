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
        border: 1px solid #767676;
        border-radius: 5px;
        background-color: #efefef;
        text-decoration: none;
    }
    .a-button:visited {
        color: black;
    }
</style>
<body style="background-color:rgb(187,255,204);">
<?php
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $maPB = $query['IDPB'];

    require __DIR__ . '/connectSQL.php';
    $link = connector();
    $db_selected = mysqli_select_db($link,'dulieu');
    $rs = mysqli_query($link,"Select * from nhanvien where IDPB = '".$maPB."'");
    echo '<table border = "1" width="100%">';
    echo '<h2 class="txtal"> Dữ liệu bảng nhân viên </h2>';
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
    mysqli_free_result($rs);
    mysqli_close($link);
?>
    <br/>
    <a class="a-button" href="/PHP/xemthongtinPB.php">Quay lại</a>

</body>
</html>