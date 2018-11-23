<?php
session_start();
require 'function.php';

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
                <input type="password" name="mdp" required size="10" placeholder="Password"/> <br>
                <span class="validity"></span>
                <input type="submit" value="connexion" />
                </form>;
 

</body>
</html>