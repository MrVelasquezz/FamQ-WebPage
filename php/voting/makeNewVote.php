<?php
    session_start();

    if(isset($_SESSION['pass'])){
        if(isset($_POST["check"])){
            require '../config.php';

            $conn = new mysqli($server, $uname, $pass, $dbname);

            $head = $post = $v1 = $v2 = '';

            $head = $_POST["head"];
            $post = $_POST['votingQuest'];
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];


            if(!empty($head) && !empty($post) && !empty($v1) && !empty($v2)){
                $sql = "INSERT INTO voting (head, post, v1, v2)
                        VALUES ('$head', '$post', '$v1', '$v2')";

                $request = $conn -> query($sql);

                $conn->close();

            }
        }
        else{
            echo 'Вы не проверили текст!';
        }
    }
    header('Location: ../../index.php?page=createVoting');
?>