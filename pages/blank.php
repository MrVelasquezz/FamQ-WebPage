<?php
    session_start();
    require 'php/config.php';

    $conn = new mysqli($server, $uname, $pass, $dbname);

    $sql = 'SELECT * FROM voting WHERE stat = 0';

    $request = $conn->query($sql);

    global $id, $head, $post, $v1, $v2, $stat;

    if($request -> num_rows > 0){
        while($row = $request->fetch_assoc()){
            $id = $row['id'];
            $head = $row['head'];
            $post = $row['post'];
            $v1 = $row['v1'];
            $v2 = $row['v2'];
            $stat = $row['stat'];
        }
    }
    if(!isset($_SESSION['voting']) || $_SESSION['voting']['votingID'] != $id){
        $_SESSION["voting"] = [
            'votingID' => $id,
            'votedFOR' => ''
        ];
    }
    
?>

<div class="text-center blank p-2">
    <div id="vnumber" class="mt-3">
        <strong>Голосование №<?php echo $id;?></strong>
    </div>
    <h5 class="mt-5"><?php echo $head;?></h5>
    <p class="mt-4" id="content"><?php echo $post;?></p>
    <?php
        if($_SESSION['voting']['votedFOR'] != $id){
            require 'pages/votingForm.php';
        }
        else{
            echo '<img src="images/voteStamp.png" id="voted">';
        }
    ?>
</div>  