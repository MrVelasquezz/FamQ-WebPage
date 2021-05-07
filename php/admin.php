<?php 
session_start();

require 'config.php';

$data = '';
$data = $_POST['pass'];

if(!empty($data) && !isset($_SESSION['pass'])){
   $conn = new mysqli($server, $uname, $pass, $dbname);

   $sql = "SELECT * FROM users WHERE code = '$data'";

   $request = $conn -> query($sql);
   if($request !== false && $request->num_rows>0){
      $_SESSION["pass"] = 'isAdmin';
   }
   
   header('Location: ../index.php');
   $conn->close();
   exit;
}
