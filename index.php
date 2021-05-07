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
        if(!empty($req) && $req == 'comments'){
            require 'pages/comments.php';
        }
        elseif(!empty($req) && $req == 'voting'){
            require 'pages/voting.php';
        }
    }
    //! adds opportunity for admin to delete messeges 
    if(isset($_SESSION['pass'])){
        echo '<script src="scripts/delPost.js"></script>';
    }
?>

</html>