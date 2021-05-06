<?php 
    require 'config.php';

    $conn = new mysqli($server, $uname, $pass, $dbname);

    $sql = 'SELECT * FROM comms';
    $request = $conn->query($sql);
    if($request->num_rows>0){
        global $arr;
        $arr = array();
        while($row = $request->fetch_assoc()){
            $darr = array($row['report'], $row['tdate']);
            array_unshift($arr, $darr);
        }
        echo json_encode($arr);
    }
?>