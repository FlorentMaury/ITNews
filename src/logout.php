<?php
    
    // SUppression de la session et des cookies.

    session_start();   // Initialiser
    session_unset();   // Désactiver
    session_destroy(); // Détruire

    setcookie('auth', '', time() - 1);
    header('location: ../index.php?error=1&message=Vous êtes déconnecté !');
    exit();