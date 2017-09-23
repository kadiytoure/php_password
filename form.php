<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Authentification</h1>
    <form method="post" action="form.php">
    <p>  
    <input type="password" name="pswd">Password<br/>
    <input type="submit" name="send" value="submit">
</p>
   
    <?php
    //si le mot de passe n'a pas été envoyé ou est faux;
    if (!isset($_POST['pswd']) OR $_POST['pswd'] != "kangourou"){
          echo "<form method='post' action=\"form.php\">";
    } else {
        echo "bravo! Code d'accès: GHKKI-VGFFRT-DDHUU-GTYU";
    }
   
    
?>
 </form>
</body>
</html>