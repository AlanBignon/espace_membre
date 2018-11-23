<?php
session_start();
require ('function.php');

$_SESSION["log"] = false;

if(isset($_POST['email']) && !empty($_POST['password'])){
    if ($_POST['password'] == $_POST['confpassword']){
        $_SESSION['log'] = true;
        $list = array (array($_POST['email'],$_POST['password'] ),
        );

        $file = fopen("data/donnes.csv","a");

        foreach ($list as $line )
        {
            fputcsv($file,$line);
        }

        fclose($file);
    }else{
        $_SESSION['log'] = false;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<form method="POST" action="">
    <input type="email" placeholder="mail@gmail.com" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="password" placeholder="confirm password" name="confpassword">
    <button type="submit"> Register </button>
</form>
    <a href="http://localhost/espace_membre/login.php"><button>Se connecter</button></a>
</body>
</html>
