<?php 

$title = $osztalyok[$osztaly];
include 'view/layout/head.php';

echo "<h1>$osztalyok[$osztaly]</h1>";

?>
<link rel="stylesheet" href="styles.css">
    <form method="post" action="index.php">
        <input type="hidden" name="page" value="felhasznalo">
        <input type="hidden" name="action" value="kereses">
        <input type="text" name="keresettNev">
        <input type="submit" value="KERES">
    </form>
    <?php

    foreach($osztalyok as $kulcs => $ertek) {
        if($kulcs != $osztaly) {
            echo "<h2><a href=\"index.php?osztalyId=$kulcs\">$ertek</a></h2>";
        }  
    }
    
    if ($result) {
        echo '<table>';
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            for($i=1; $i<6; $i++) {
                $nev = "-";
                $mezoNev = 'nev'.$i;
                if($row[$mezoNev] != null) {
                    $nev = $szemely->getNev($row[$mezoNev]);
                }
                $bg = "";
                if(isset($_GET['szemelyId'])) {
                    if($_GET['szemelyId'] == $row[$mezoNev]) {
                        $bg = "background-color: yellow;";
                    }
                }
                if(isset($_SESSION['id'])) {
                    if($_SESSION['id'] == $row[$mezoNev]) {
                        echo "<td style=\"color:rgb(101, 1, 252);$bg\">".$nev;
                    }
                    else echo "<td style=\"$bg\">".$nev;
                }
                else echo "<td style=\"$bg\">".$nev;
                
                $img = "uploads/".$row[$mezoNev].".jpg";
                if(file_exists($img)) {
                    echo "<br><img src=\"$img\">";
                }
                echo "</td>\n";
            }
            echo "</tr>";
        }
        echo '</table>';
    } 
    else {
        echo "Nincsenek tanulók eben az osztályban";
    } 
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>