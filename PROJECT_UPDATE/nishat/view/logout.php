<?php 
    // session_start();
    // session_destroy();
    setcookie('flag', 'abc', time()-10, '/');
    header('location: ./sign_in.php');
?>