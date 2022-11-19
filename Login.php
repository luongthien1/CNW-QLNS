<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .TextBox{
            width: 6cm
        }
        .txtal {
            text-align: center;
        }
    </style>
</head>

<body style="background-color: rgb(187,255,204);">
        <?php
            session_start();
            if (isset($_SESSION["username"])) 
            header("location: ./xemthongtinNV.php");
        ?>
    <div>
        <div style="text-align: center;"><span style="font-size: 30px;">Login</span></div>
        
        <div>
            <form action="xulylogin.php" class="txtal" method="post"  name="form" id = "form">
                <table style="display: inline-block">
                        <tr>
                            <td>
                                <label for="Username">Username</label>
                            </td>
                            <td>
                                <input class="TextBox" type="text" name="Username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                                <div color="red" id="error1"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Password">Password</label>
                            </td>
                            <td>
                                <input class="TextBox" type="password" name="Password" id="Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                                <div color="red" id="error2"></div>
                            </td>
                        </tr>
                </table>
                <div color="red" id="error">
                    <?php
                        if (isset($_GET['error'])) echo $_GET['error'];
                    ?>
                </div>
                <div style="text-align: center;">
                    <span><input type="button" value="OK" onclick="Validate()"></span>
                    <span onclick="reset()"><input type="button" value="Reset"></span>
                </div>
            </form>
        </div>

    </div>
</body>
<script>
    function reset() {
        texts = document.getElementsByClassName("TextBox");
        for (text of texts) {
            text.value = "";
        } 
    }
    function Validate() {
        document.getElementById("error1").innerHTML = "";
        document.getElementById("error2").innerHTML = "";
        text = document.getElementsByName("Username")[0].value;
        pwd= document.getElementById("Password").value;
        if (text == "" || text == null ||pwd=="" || pwd == null){
            if (text == "" || text == null) {
                document.getElementById("error1").innerHTML = "Chưa nhập trường tên.";
                document.getElementById("error1").style.backgroundColor = "red";
            }
            if (pwd=="" || pwd == null) {
                document.getElementById("error2").innerHTML = "Chưa nhập mật khẩu.";
                document.getElementById("error2").style.backgroundColor = "red";
            }
            if ((text == "" || text == null) && (pwd=="" || pwd == null)) {
                document.getElementById("error1").innerHTML = "";
                document.getElementById("error2").innerHTML = "Chưa nhập thông tin.";
                document.getElementById("error2").style.backgroundColor = "red";
            }
        }
        else this.form.submit();
    }
</script>
</html>