<?php
$title = "Találati lista";
include 'view/layout/head.php';

if(isset($hiba)){
    echo $hiba;
}
elseif(isset($talalatok)){
    if($talalatok){
        foreach($talalatok as $kulcs => $nev){
            echo "<h2><a href=\"index.php?szemelyId=$kulcs\">$nev</a></h2>";
            }
    }
    else {
        echo "<h2>Nem található ilyen név: ".$_POST['keresettNev']."</h2>";
    }
}
?>
<hr>
<a href="index.php"> Vissza </a>

</body>
</html>