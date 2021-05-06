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
    <style>
        body {
            height: 100vh;
            width: 100vw;
        }

        #login {
            height: 400px;
            width: 300px;
        }
    </style>
    <title>Anonym Comments</title>
</head>

<body class="d-flex justify-content-center align-items-center">
<?php
    if(!isset($_SESSION['pass'])){
        require "admin/notLoged.php";
    }
    else{
        require "admin/loged.php";
    }
?>
    
</body>

</html>