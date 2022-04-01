<?php

    // Connexion à la base de donnée : "EXAM".

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=exam;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }

?>