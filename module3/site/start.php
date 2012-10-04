<?php
    session_start();
    date_default_timezone_set('America/Chicago');
    if (isset($_SESSION['user_id']) xor $user_logged) {
        header("Location: $redirect");
        exit();
    }
    $elements_by_page = 5;
    require 'database.php';
    include "functions.php";
    if ($user_logged) {
    	$user = $_SESSION['user_id'];
        $stmt = $mysqli->prepare("SELECT username, email_address, admin FROM accounts WHERE id=?");
        if(!$stmt){
            printf("Query Prep Failed: %s\n", $mysqli->error);
            exit;
        }

        $stmt->bind_param('s', $user);
        $stmt->execute();
        $stmt->bind_result($name, $email, $admin);
        $stmt->fetch();
        $stmt->close();
    }
    
    
?>