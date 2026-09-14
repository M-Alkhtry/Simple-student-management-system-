<?php
    session_start();
    
    if(session_destroy()) {
        
        header("Location: st_login.php");
    }
?>
