<?php

    session_start();
    unset($_SESSION['user']);
    header('Location: index.php?status=succes&message="Vous êtes bien déconnecté"');

?>