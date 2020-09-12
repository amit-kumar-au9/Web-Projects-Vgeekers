<?php 
	session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['type'])){
        $login_id = $_SESSION['id'];
        $login_type = $_SESSION['type'];
        $site_id = $_SESSION['site_id'];
    }
?>