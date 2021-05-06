<?php 
session_start();

$data = '';
$data = $_POST['pass'];

if(!empty($data) && $data == 'famqnumberone'){
   $_SESSION["pass"] = 'famqnumberone';
}
header('Location: ../index.php');
exit;