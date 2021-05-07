<?php
    session_start();

    require '../config.php';

    $id = '';
    $id = $_POST['id'];
    if(isset($_SESSION['pass'])){
        $conn = new mysqli($server, $uname, $pass, $dbname);

        $sql = "DELETE FROM comms WHERE id = '$id'";

        $conn->query($sql);
        $conn->close();
    }
    exit;

