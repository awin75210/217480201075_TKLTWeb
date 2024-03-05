<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Họ và tên: <input type="text" name="hoten"> <br>
        Ngày sinh: <input type="text" name="ngaysinh"> <br>
        lớp: <input type="text" name="lop"> <br>
        Điểm: <input type="text" name="diem"> <br>
        <input type="submit" value="Gửi">


    </form>

    <?php
    $hoten = "Nguyễn Thanh Minh";
    $ngaysinh = "12/09/2000";
    $lop = "12A1";
    $diem = 8.9;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $lop = $_POST['lop'];
        $diem = $_POST['diem'];

        echo "Họ và tên: " . $hoten . "<br>";
        echo "Ngày sinh: " . $ngaysinh . "<br>";
        echo "Lớp: " . $lop . "<br>";
        echo "Điểm: " . $diem . "<br>";
    }



    ?>

</body>

</html>