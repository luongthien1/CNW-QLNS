<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(187,255,204);">
    <div style="text-align: center;">
        <h2>TÌM KIẾM</h2>
        <form action="form_timkiem.php">
            <div style="display: inline-block; border: 1px solid black; padding: 5px 50px 20px">
            <table>
                <tr>
                <?php 
                    require __DIR__ . '/connectSQL.php';
                    $link = connector();
                    $result = mysqli_query($link,"Show columns from nhanvien");
                    while ($row = mysqli_fetch_array($result))
                    {
                        if ($row['Field'] != "IDPB") {
                        echo 
                            '<tr>
                                <th>'.$row['Field'].'
                                <input name="rabu" type="radio" onchange="changeph(this.value)" value='.$row['Field'].'>
                                </th>
                            </tr>';
                        }
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);
                ?>
                </tr>
            </table>
            <br>
            <label for="nhap"></label>
            <input type="text" id="inputfield" name="text" placeholder="Nhập ở đây">
            <input type="submit" value="OK">
            <input type="button" value="Reset" onclick = "document.getElementById('tttt').value=''">
            </div>
        </form>
    </div>
    <script>
        document.getElementsByName("rabu")[0].checked=true;
        function changeph(str) {
            document.getElementById("inputfield").placeholder = str+"";
        }
    </script>
</body>
</html>