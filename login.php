<?php
session_start();
require 'function.php';

$_SESSION["log"] = false;

$nomfichier = "data/donnes.csv";
$tableaucsv = recupcsv($nomfichier);

    if(!empty($tableaucsv)) {
        $i = 0;
        foreach ($tableaucsv[$i] as $donnes){
            $p=0;
            $i ++;

            if (isset($_POST["email"]) && $tableaucsv[$i-1][$p] == $_POST["email"] && isset($_POST["password"]) && $tableaucsv[$i-1][$p+1] == $_POST["password"]){
                $_SESSION["log"] = true;
                redirectionDashboard();
            } elseif (isset($_POST["email"]) && $tableaucsv[$i-1][$p] != $_POST["email"]) {
                echo "Email non enregistré";
                break;
            }elseif (isset($_POST["password"]) && $tableaucsv[$i-1][$p+1] != $_POST["password"]) {
                echo "mauvais mot de passe";
                break;
            }
        }
    }
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
            <form method="POST">
                <input type="hidden" name="action" value="set_pseudo" />
                <input type="hidden" name="action" value="set_mdp" />
                <input type="email" name="email" required size="10" placeholder="email" /> <br> 
                <input type="password" name="password" required size="10" placeholder="Password"/> <br>
                <span class="validity"></span>
                <input type="submit" value="connexion" />
            </form>
            <a href="http://localhost/espace_membre/register.php"><button>se crer un compte</button></a>

</body>
</html>