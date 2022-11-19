<?php
    function connector() {
        $link = mysqli_connect('localhost','root','','dulieu',3307) or die('Could not connect: ');
        return $link;
    }
?>