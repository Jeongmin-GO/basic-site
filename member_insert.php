<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1. "@" .$email2;
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "copycat", "wotn0154!", "copy");
    $sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)"; //입력받은 정보 db에 저장
    
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
    <script>
        location.href = 'index.php';
    </script>
    ";
?>