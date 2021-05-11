<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
    //! adds head with title to the document
    require 'config/head.php';

    //! changes the page by GET request
    if(empty($_REQUEST['page'])){
        require 'pages/comments.php';
    }
    elseif(!empty($_REQUEST['page'])){
        $req = '';
        $req = $_REQUEST['page'];
        if($req == 'comments'){
            require 'pages/comments.php';
        }
        elseif($req == 'voting'){
            require 'pages/voting.php';
        }
        elseif($req == 'createVoting'){
            require 'pages/createVoting.php';
        }
        elseif($req == 'results'){
            require 'pages/ready.php'; 
        }
        else{
            require 'pages/empty.php';
        }
    }
    //! adds opportunity for admin to delete messeges 
    if(isset($_SESSION['pass'])){
        echo '<script src="scripts/delPost.js"></script>';
    }
?>

</html>