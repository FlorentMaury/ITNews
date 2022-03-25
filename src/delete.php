<?php

    require_once('connection.php');

    if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $erease_id = htmlspecialchars($_GET['id']);
        $delete = $bdd->prepare('DELETE FROM article WHERE id = ?');
        $delete->execute(array($erease_id));
        header('location: ../articles.php?error=1&message=Article supprimé !');
    }

?>