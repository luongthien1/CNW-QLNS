<?php
    
    require __DIR__ . '/connectSQL.php';
    $link = connector();
    $arr = explode("&",$_SERVER["QUERY_STRING"]);
    $query = "DELETE FROM nhanvien WHERE ";
    foreach ($arr as $para) {
        $query .= "IDNV='".explode("=",$para)[1]."' or ";
    }
    $query = substr($query, 0, strlen($query)-3);
    $rs = mysqli_query($link,$query);
    header('location: ./xoatatca.php');
?>