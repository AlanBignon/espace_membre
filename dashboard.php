<?php
require 'function.php';
session_start();

if(isset($_GET["connected"])){
    $_connected = $_GET["connected"];
        if ($_connected == 1) {
            redirection();
    }
}



$row = 1;
if (($handle = fopen("data/donnes.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
        $num = count($data);
        echo "<p> $num champs à la ligne $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>








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
        //<?php
        //        $nomfichier = "data/donnes.txt";
        //        echo recupcsv($nomfichier);
        //        ?>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies eros et mauris ultricies, id dignissim odio semper. Donec quis enim nulla. Duis iaculis congue nunc non molestie. Suspendisse fringilla lacinia erat vitae gravida. In rutrum nibh sed sodales consequat. Nullam interdum egestas mi quis porttitor. Nullam sit amet arcu et dui malesuada luctus sed id nisl. Morbi eu odio eu erat lobortis placerat.

            Proin ligula diam, rhoncus ac mattis eget, efficitur tincidunt urna. Maecenas tristique augue ante, tincidunt pharetra erat tempor nec. Nam eleifend dolor maximus egestas faucibus. Sed id mollis lacus, vitae hendrerit nulla. Sed facilisis justo in nisl maximus tincidunt. Phasellus viverra urna vitae finibus interdum. Vestibulum tristique ac ipsum ac pretium. Nullam interdum venenatis nisl, vel cursus nunc feugiat sit amet. In mattis vestibulum erat consequat sollicitudin.

            Nunc sed nisi in sem laoreet lacinia nec non nisi. Cras sed nibh ut nibh tempor consequat eget non est. Aenean cursus orci et eros rhoncus tincidunt. Donec tincidunt interdum justo sed efficitur. Mauris blandit justo a egestas aliquam. Pellentesque lobortis mi tempus arcu tincidunt, vitae tempor lorem iaculis. In eu pharetra urna, vel laoreet magna. Pellentesque convallis odio quis erat ornare volutpat non at arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Vivamus nec nunc sit amet enim pulvinar dictum. Nulla et odio ut urna porta tristique ut nec quam. Vestibulum tristique eget nibh fringilla ultrices. Proin id felis diam. Mauris sit amet lectus sed arcu fringilla viverra. Morbi facilisis odio nec risus sagittis, ac tincidunt mi fringilla.

            Morbi volutpat turpis vel ullamcorper faucibus. Phasellus placerat urna eu sapien ultrices auctor. Nunc mattis metus a iaculis fringilla. Cras luctus sit amet nulla iaculis lacinia. Morbi non congue velit. Vivamus ut porta nibh, a faucibus tortor. Nunc consectetur, urna vel ultrices luctus, ipsum nulla ornare nunc, quis volutpat risus massa sed dui. Proin dictum tincidunt ipsum, id mollis mauris accumsan ac. Nunc nec mi odio. Aliquam nec aliquet nibh. Proin mollis enim justo, volutpat facilisis velit consequat ac. Mauris at lectus eget libero blandit tincidunt.

            Maecenas hendrerit arcu enim, et dignissim augue rutrum sit amet. Quisque cursus arcu in tincidunt consequat. Ut dignissim molestie erat non posuere. Aenean non lacinia diam, in interdum elit. Praesent ac sollicitudin orci. Donec aliquam nisi felis, ac molestie tellus interdum non. Proin aliquam, orci ut dapibus mollis, libero ex pharetra neque, ac posuere odio nisl nec risus.
        </p>

        <button class="log_out"><a href="login.php"></a> Log out</button>
    </main>
</body>
</html>