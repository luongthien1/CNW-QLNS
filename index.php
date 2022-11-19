<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            width: 100%;
            height: 100;
            border: none;
            border-bottom: 2px solid rgba(9,116,116,0.5);
        }
        .side-content:nth-child(1){
            border: none;
            float: left;
            width: 20%;
            height: 400px;
        }
        .body-content{
            width: 65%;
            border: none;
            height: 400px;
        }
        .side-content:nth-child(2){
            border: none;
            float: right;
            width: 15%;
            height: 400px;
        }
        .footer{
            width: 100%;
            height: 100px;
            border: none;
        }

    </style>
</head>

<body>
    <iframe allowfullscreen class="header" src="./T1.html"></iframe>
    <div style="text-align: center; margin-top: 20px">
        <iframe allowfullscreen class="side-content" id="iframe2" src="./T2.html"></iframe>
        <iframe allowfullscreen class="side-content" id="iframe3" src="./T4.html"></iframe>
        <div>
            <iframe allowfullscreen class="body-content" src="./Trangchu.php"></iframe>
        </div>
    </div>
    <footer>
        <iframe allowfullscreen class="footer" src="./T5.html"></iframe>
    </footer>
</body>
<script defer>
    var iframe = document.getElementById('iframe2');
    var Imageframe = document.getElementById('iframe3');
    
    var frame = document.getElementsByClassName("body-content")[0];
    let image;
    iframe.onload = function() {
        
        buttons = iframe.contentWindow.document.getElementsByTagName("button");
        

        for (let index = 0; index < buttons.length; index++) {
            
            buttons[index].addEventListener("click",function() {
                if (index==0) {
                    frame.src = "./Trangchu.php";
                    image.src = "./Index.gif";
                }
                else if (index==1) {
                    frame.src = "./xemthongtinNV.php";
                }
                else if (index==2) {
                    frame.src = "./xemthongtinPB.php";
                }
                else if (index==3) {
                    frame.src = "./timkiem.php";
                }
                else if (index==4) {
                    frame.src = "./capnhatthongtin.php";
                }
                else if (index==5) {
                    frame.src = "./xoathongtin.php";
                }
                else if (index==6) {
                    frame.src = "./xoatatca.php";
                }
                else if (index==7) {
                    frame.src = "./chenthongtin.php";
                }
                else {
                    
                    frame.src = "./form"+index+".html";
                    image.src = "./Form"+index+".png";
                }
            })
        }
    }
    Imageframe.onload = function() {
        console.log(image);
        image = Imageframe.contentWindow.document.getElementById("Image");
        console.log(image);
    }

    
</script>
</html>