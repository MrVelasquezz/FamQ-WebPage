<?php
    require 'config.php';

    $data = '';
    $data = $_POST['comm'];

    if(!empty($data)){

        $conn = new mysqli($server, $uname, $pass, $dbname);

        if($conn->connect_error){
            echo '<p class="text-danger">Connection error!</p>';
        }

        $date = date("Y-m-d");

        $sql = "INSERT INTO comms (report, tdate)
                VALUES ('$data', '$date')";

        $conn -> query($sql);
        header('Location: /');
        $conn -> close();
    }
    else{
        header('Location: /');
    }
?>
