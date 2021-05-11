<?php
    session_start();
    $var = " ";
    $var = $_POST['vars'];

    $_SESSION['voting']['votedFOR'] = $_SESSION['voting']['votingID'];
    $vote = $_SESSION['voting']['votingID'];
    if(!empty($var)){
        global $sql, $check, $pv, $dbvar;

        if($var == 'y'){
            $check = "SELECT v1a FROM voting WHERE id = '$vote'";
            $dbvar = 'v1a';
        }
        elseif($var == 'n'){
            $check = "SELECT v2a FROM voting WHERE id = '$vote'";
            $dbvar = 'v2a';
        }
        else{
            header('Location: /');
            exit;
        }

        require '../config.php';

        $conn = new mysqli($server, $uname, $pass, $dbname);
            
        $request = $conn -> query($check);
        if($request !== false && $request->num_rows > 0){
            while($row = $request->fetch_assoc()){
                $pv = $row[$dbvar];
            }
            $pv += 1;
            $sql = "UPDATE voting SET $dbvar = '$pv' WHERE id = '$vote'";
            $request = $conn ->query($sql);
            $conn -> close();
        }
        header('Location: ../../index.php?page=voting');
        exit;
    }
?>