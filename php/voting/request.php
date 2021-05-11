<?php
    session_start();

    require '../config.php';

    $conn = new mysqli($server, $uname, $pass, $dbname);

    $sql = "SELECT * FROM voting";

    $request = $conn->query($sql);

    if($request->num_rows > 0){
        global $arr;
        $arr = array();
        while($row = $request->fetch_assoc()){
            if($row['stat'] != 0){
                $darr = array($row['head'], $row['v1a'], $row['v2a'], $row['stat'], $row['id']);
                array_unshift($arr, $darr);
            }
        }
        $json = json_encode($arr);
        echo $json;
        $conn->close();
        exit;
    }
?>