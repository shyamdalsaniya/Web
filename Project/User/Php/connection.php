<?php 
$con = mysqli_connect('localhost','root','','projectweb');
?>
<?php
session_start();
if(!isset($_SESSION['sid'])){
     $_SESSION['sid'] = $num['id'];
     $_SESSION['uname'] = $num['username'];
     header("Location: ../../index.php");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../../index.php");
}
?> 