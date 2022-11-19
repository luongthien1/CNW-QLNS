<?php
    $ID = array_key_first($_GET);
    $VALUE = array_values($_GET)[0];
    
    try {    
        
        require __DIR__ . '/connectSQL.php';
        $link = connector();
        if (isset($_GET["IDNV"])) {
            $rs = mysqli_query($link,"INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES
                ('".$_GET["IDNV"]."', '".$_GET["Hoten"]."', '".$_GET["IDPB"]."', '".$_GET["Diachi"]."');");
            if ($rs>0) $noti = "NV";
        }
        else {
            $rs = mysqli_query($link,"INSERT INTO `phongban` (`IDPB`, `Tenpb`, `Mota`) VALUES
            ('".$_GET["IDPB"]."', '".$_GET["Tenpb"]."', '".$_GET["Mota"]."');");
            if ($rs>0) $noti = "PB";
        }
        mysqli_close($link);
        header("location: ./chenthongtin.php?noti=".$noti);
    } 
    catch(Exception $e) {

        $message =  $e->getMessage();
        if (str_contains($message,"Duplicate entry"))
        {
            header("location: ./chenthongtin.php?error=Trùng dữ liệu&$ID=$VALUE");
        }
    }
?>