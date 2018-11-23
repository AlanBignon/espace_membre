<?php
include 'function.php';
session_start();

if(isset($_GET["connected"])){
    $_connected = $_GET["connected"];
        if ($_connected == 1) {
            redirection();
    }
}

?><!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>
</head>
<body>
    <header>
        <h1>Coucou tu est connecté</h1>
    </header>
    <main>
        <button class="log_out"><a href="login.php"></a> Log out</button>
    </main>
</body>
</html>