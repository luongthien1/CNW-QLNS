<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .panel {
        display: inline-block;
        border: 1px solid #696969;
        vertical-align: top;
        width:49%;
        text-align: center;
        height: 250px;
    }
    .txtal {
        text-align: center;
        display: block;
    }
    .button-like {
        padding:1px 6px;
        border: 1px solid #767676;
        font-size: 15px;
        border-radius: 2px;
        background-color: #efefef;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<body style="background-color: rgb(187,255,204);">
    <div class="txtal">
        <h2>THÊM THÔNG TIN MỚI</h2>
        <?php
        if (isset($_GET["noti"]))
            if ($_GET["noti"] == "NV")
                echo '<h3 style="color:green">Đã thêm thông tin một nhân viên.</h3>';
            else if ($_GET["noti"] == "PB")
                echo '<h3 style="color:green">Đã thêm thông tin một phòng ban.</h3>';
        session_start();
        if (!isset($_SESSION["username"])) 
            header("location: ./Login.php");
        ?>
        <div class="panel">
            <h2>Thêm nhân viên</h2>
            <form action="xulychenthongtin.php" onsubmit="return check1()">
                <table style="display: inline-block;">
                    <tr>
                    <td><label for="IDNV">IDNV</label></td>
                    <td><input id="IDNV" name="IDNV"></td>
                    </tr>
                    <tr>
                    <td><label for="Hoten">Hoten</label></td>
                    <td><input id="Hoten" name="Hoten"></td>
                    </tr>
                    <tr>
                    <?php
                        echo "<td>IDPB</td> <td><select id='sIDPB' name='IDPB' style=' width: 100%;'>";
                        
                        require __DIR__ . '/connectSQL.php';
                        $link = connector();
                        $rs = mysqli_query($link,"Select IDPB from phongban");
                        while ($row = mysqli_fetch_array($rs)) {
                            echo "<option value='".$row[0]."'>".$row[0]."</option>";
                        }
                        echo   "</select></td>";
                    ?>
                    </tr>
                    <tr>
                    <td><label for="Diachi">Diachi</label></td>
                    <td><input id="Diachi" name="Diachi"></td>
                    </tr>
                    </tr>
                        <td height=20px colspan="2" style="color:red" id="error1"> </td>
                    <tr>
                    <tr>
                        <td><span class="button-like" onclick="resetButton1()">Đặt lại</span></td>
                    <td><input type="submit" value="Chèn thông tin nhân viên"></td>
                    </tr>
                </table>    
            </form>
        </div>
        <div class="panel">
            <h2>Thêm phòng ban</h2>
            <form action="xulychenthongtin.php" onsubmit="return check2()">
                <table style="display: inline-block;">
                    <tr>
                        <td>
                        <label for="IDPB">IDPB</label>
                        </td>
                        <td>
                        <input id="IDPB" name="IDPB">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="Tenpb">Tenpb</label>
                        </td>
                        <td>
                        <input id="Tenpb" name="Tenpb">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="Mota">Mota</label>
                        </td>
                        <td>
                        <input id="Mota" name="Mota">
                        </td>
                    </tr>
                    </tr>
                        <td height=20px colspan="2" style="color:red" id="error2"> </td>
                    <tr>
                    <tr>
                        <td><span class="button-like" onclick="resetButton2()">Đặt lại</span></td>
                        <td>
                        <input type="submit" value="Chèn thông tin phòng ban">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div style="color:red">
            <?php
                if (isset($_GET["error"])){
                    $ID = array_keys($_GET)[1];
                    $VALUE = array_values($_GET)[1];
                    if ($_GET["error"] == "Trùng dữ liệu") {
                        echo "Dữ liệu đã tồn tại ($VALUE), vui lòng nhập $ID khác.";
                    }
                }
            ?>
        </div>
    </div>
</body>
<script>
    function resetButton1() {
        document.getElementById("IDNV").value="";
        document.getElementById("Hoten").value="";
        document.getElementById("Diachi").value="";
        document.getElementById("sIDPB")[0].selected=true;
    }
    function check1() {
        document.getElementById("error2").innerHTML="";
        if (isEmpty(document.getElementById("IDNV").value) ||
        isEmpty(document.getElementById("Hoten").value) ||
        isEmpty(document.getElementById("Diachi").value)) {
            document.getElementById("error1").innerHTML="Vui lòng nhập đủ thông tin";
            return false;
        }
        return true;
    }
    function resetButton2() {
        document.getElementById("IDPB").value="";
        document.getElementById("Tenpb").value="";
        document.getElementById("Mota").value="";
    }
    function check2() {
        document.getElementById("error1").innerHTML="";
        if (isEmpty(document.getElementById("IDPB").value) ||
        isEmpty(document.getElementById("Tenpb").value) ||
        isEmpty(document.getElementById("Mota").value)) {
            document.getElementById("error2").innerHTML="Vui lòng nhập đủ thông tin";
            return false;
        }
        return true;
    }
    function isEmpty(text) {
        rs = text.match(/\s*\S\s*/i);
        if (rs == null) return true;
        else return false;
    }
</script>
</html>