<?php
    session_start();
    // Stergem sesiunea
    if(session_destroy()) {
        header("Location: login.php");
    }
?>