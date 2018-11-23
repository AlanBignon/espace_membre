<?php
session_start();
require 'function.php';

if(!empty($tableaucsv)) {
    $i = 0;
    foreach ($tableaucsv[$i] as $donnes){
        for ($p = 0; $p < COUNT($donnes); $p ++ ){
            if ($donnes[$p] == $_POST["email"] && $donnes[$p+1] == $_POST["password"]){
                $_SESSION["log"] = true;
            } elseif ($donnes[$p] != $_POST["email"]) {
                echo "Email non enregistré";
            }elseif ($donnes[$p+1] != $_POST["password"]) {
                echo "mauvais mot de passe";
            }
        }
        $i ++;
    }
}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php $nomfichier = "data/donnes.csv" ?>

<?php $tableaucsv = recupcsv($nomfichier);?>
<?php var_dump($tableaucsv);?>
                <form method="POST">
                <input type="hidden" name="action" value="set_pseudo" />
                <input type="hidden" name="action" value="set_mdp" />
                <input type="email" name="email" required size="10" placeholder="email" /> <br> 
                <input type="password" name="password" required size="10" placeholder="Password"/> <br>
                <span class="validity"></span>
                <input type="submit" value="connexion" />
                </form>
 

</body>
</html>