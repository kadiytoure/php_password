<?php
// isset permet de vérifier si la variable contenant le nom de l'input password existe 
//et si elle contient le mot de passe kangourou; 
if(isset($_POST['pswd']) AND $_POST['pswd']=="kangourou") {
    echo "Bravo! Authentification réussie!";
}else{
    echo "echec de l'authentification!";
}


?>