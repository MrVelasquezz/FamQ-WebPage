<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <?php
        if(isset($_SESSION['pass'])){
           echo '<style>.del{visibility: visible;}</style>';
        }
    ?>
    <title>Anonym Comments</title>
</head>

<?php
    $req = '';
    $req = $_REQUEST['page'];
    if(!empty($req) && $req == 'comments'){
        require 'pages/comments.php';
    }
    elseif(!empty($req) && $req == 'voting'){
        require 'pages/voting.php';
    }
    if(isset($_SESSION['pass'])){
        echo '<script src="scripts/delPost.js"></script>';
     }
?>

</html>