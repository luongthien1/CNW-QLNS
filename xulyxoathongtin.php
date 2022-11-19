<?php
    $IDNV = array_key_first($_GET);
    echo $IDNV;
    
    require __DIR__ . '/connectSQL.php';
    $link = connector();
    $rs = mysqli_query($link,"DELETE FROM nhanvien
                            WHERE IDNV='$IDNV'");
    header('location: ./xoathongtin.php');
?>