<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tobias
 * Date: 28.10.2015
 * Time: 17:40
 */
?>
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php
        $indexLink = '<a href="index.php">Bestenliste - Funktioniert';
        $newestLink = '<a href="newest.php">Neuestes Spiel - Work in Progress';
        $mostLink = '<a href="most.php">Öftester Spieler - Work in Progress';
        if ($thisPage == "index") {
            echo '<li class="active">';
            echo $indexLink;
            echo '<span class="sr-only">(current)</span>';
        } else {
            echo ' <li>';
            echo $indexLink;
        }
        if ($thisPage == "newest") {
            echo '<li class="active">';
            echo $newestLink;
            echo '<span class="sr-only">(current)</span>';
        } else {
            echo ' <li>';
            echo $newestLink;
        }
        if ($thisPage == "most") {
            echo '<li class="active">';
            echo $mostLink;
            echo '<span class="sr-only">(current)</span>';
        } else {
            echo ' <li>';
            echo $mostLink;
        }
        echo '</a></li>';
        ?>
    </ul>
    <ul class="nav nav-sidebar">
        <?php
        $nameLink = '<a href="name.php">Suche nach Spielern - Funktioniert';
        $numberLink = '<a href="number.php">Suche nach Spielnummer - Funktioniert';
        if ($thisPage == "name") {
            echo '<li class="active">';
            echo $nameLink;
            echo '<span class="sr-only">(current)</span>';
        } else {
            echo ' <li>';
            echo $nameLink;
        }
        if ($thisPage == "number") {
            echo '<li class="active">';
            echo $numberLink;
            echo '<span class="sr-only">(current)</span>';
        } else {
            echo ' <li>';
            echo $numberLink;
        }
        echo '</a></li>';
        ?>

    </ul>
</div>
