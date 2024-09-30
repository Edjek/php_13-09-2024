<?php

// deconnexion => supprimer la session
session_start();
unset($_SESSION);
session_destroy();

header('Location: ../index.php');
exit;
