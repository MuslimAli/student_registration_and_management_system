<?php
    include('index.php');
    session_destroy();
    echo "logout............";
    header("refresh:1;url=index.php");
?>