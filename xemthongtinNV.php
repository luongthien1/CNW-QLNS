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
    $rs = mysqli_query($link,"Select * from nhanvien");
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
    
</body>
</html>