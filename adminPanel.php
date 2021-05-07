<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php
    require 'config/head.php';
?>

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