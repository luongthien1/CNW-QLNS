<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        require __DIR__ . '/connectSQL.php';
        $link = connector();
        $rs = mysqli_query($link,"UPDATE phongban
                                SET Tenpb = '".$_GET['Tenpb']."', Mota = '".$_GET['Mota']."'  
                                WHERE IDPB='".$_GET['IDPB']."'");
        header('location: ./capnhatthongtin.php');
    ?>
</body>
</html>