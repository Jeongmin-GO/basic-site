<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"]; //사용자가 폼에 입력한 비밀번호

    $con = mysqli_connect("localhost", "copycat", "wotn0154!", "copy");
    $sql = "select * from members where id='$id'";
    
    $result = mysqli_query($con, $sql); //db에서 아이디 검색
    $num_match = mysqli_num_rows($result); // 검색결과의 레코드 세기

    if(!$num_match){
        echo("
        <script>
        window.alert('등록되지 않은 아이디입니다!')
        history.go(-1)
        </script>
        ");
    }else{
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"]; // db의 비밀번호

        mysqli_close($con);
        if($pass != $db_pass){
            echo("
            <script>
            window.alert('비밀번호가 틀렸습니다')
            history.go(-1)
            </script>");
            exit;
        } else { //일치하는 회원이 있을 때
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["userlevel"] = $row["level"];
            $_SESSION["userpoint"] = $row["point"];
        }
        echo("
            <script>
                location.href = 'index.php';
            </script>
        ");
    }
?>