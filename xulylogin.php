<?php
    session_start();
    
    require __DIR__ . '/connectSQL.php';
    $link = connector();
    $rs = mysqli_query($link,"Select * From user where Username='".$_POST["Username"]."' and 
                        Password='".$_POST["Password"]."'");
    if (mysqli_num_rows($rs)>0) {
        $row = mysqli_fetch_array($rs);
        $_SESSION["username"] = $row[1];
        header("location: ./xemthongtinNV.php");
    }
    else
        header("location: ./Login.php?error=Tài khoản hoặc mật khẩu không đúng");
?>