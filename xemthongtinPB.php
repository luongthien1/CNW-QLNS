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
<body style="background-color:rgb(187,255,204);">
<?php
    require __DIR__ . '/connectSQL.php';
    $link = connector();
    $db_selected = mysqli_select_db($link,'dulieu');
    $rs = mysqli_query($link,"Select * from phongban");
    echo '<table border = "1" width="100%">';
    echo '<h2 class="txtal"> Dữ liệu bảng phòng ban </h2>';
    echo '<tr><th> IDPB</th><th>Tenpb</th><th>Mota</th><th>Chi tiet</th></tr>';
    while ($row = mysqli_fetch_array($rs))
    {
        echo 
            '<tr>
                <td>'.$row['IDPB'].'</td>
                <td>'.$row['Tenpb'].'</td>
                <td>'.$row['Mota'].'</td>
                <td> <a href="/PHP/xemthongtinNVPB.php?IDPB='.$row['IDPB'].'">Chi tiết</a> </td>
            </tr>';
    }
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>