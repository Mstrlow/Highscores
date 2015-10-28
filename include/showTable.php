<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tobias
 * Date: 28.10.2015
 * Time: 17:10
 */
if ($id == 'home') {
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped">';
    echo '<th> Spielnummer';
    echo '<th> Name';
    echo '<th> Score';
    foreach ($xml->spiel as $spiel) {
        echo '<tr>';
        echo '<td>' . $spiel->id . '</td>';
        echo '<td>' . $spiel->name . '</td>';
        echo '<td>' . $spiel->score . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
}

if ($id == 'searchSomething') {
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped">';
    echo '<th> Spielnumer';
    echo '<th> Name';
    echo '<th> Score';
    foreach ($xml->spiel as $spiel) {
        if (isset($_POST['search']) && $spiel->$searchContent == $_POST['search']) {
            echo '<tr>';
            echo '<td>' . $spiel->id . '</td>';
            echo '<td>' . $spiel->name . '</td>';
            echo '<td>' . $spiel->score . '</td>';
            echo '</tr>';
        } else if (!isset($_POST['search']) || $_POST['search'] == '*') {
            echo '<tr>';
            echo '<td>' . $spiel->id . '</td>';
            echo '<td>' . $spiel->name . '</td>';
            echo '<td>' . $spiel->score . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
    echo '</div>';
}

?>