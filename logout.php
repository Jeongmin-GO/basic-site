<?php
    session_start();
    //세션변수 삭제
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userlevel"]);
    unset($_SESSION["userpoint"]);

    echo("
        <script>
        location.href = 'index.php';
        </script>
    ");
?>