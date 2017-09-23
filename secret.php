<?php
$_POST['user'];
$_POST['pswd'] = "kangourou";

if ($_POST['user'] && $_POST['pswd'])  {
   echo "Bravo! Authentification réussie!";
} else {
    echo "Echec de l'authentification, tu dois recommencer!";
}

?>