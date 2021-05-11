<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f67b9fdeb0.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/blank.css">
    <?php
        if(isset($_SESSION['pass'])){
           echo '<style>.del{visibility: visible;}</style>';
        }
    ?>
    <title>
        <?php 
            require 'config/title.php';
        ?>
    </title>
</head>