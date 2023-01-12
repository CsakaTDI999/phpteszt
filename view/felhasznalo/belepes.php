<?php

$title = "BELÉPÉS";
include 'view/layout/head.php';

    echo $eredmeny;

?>
        <link rel="stylesheet" href="styles.css">
        <form action="index.php" method="post">
        Felhasználónév:<br>
        <input type="text" name="felhnev" placeholder="Username" required><br>
        Jelszó:<br>
        <input type="password" name="jelszo" required placeholder="Password"><br>
        <input type="hidden" name="action" value="belepes">
        <input type="hidden" name="page" value="felhasznalo">
        <input type="submit" value="BELÉPÉS">
    <hr>
    <a href="index.php"><< Vissza</a>
</body>
</html>