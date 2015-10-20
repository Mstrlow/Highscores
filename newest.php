<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Asteroids Online Highschores">
    <meta name="author" content="Tobias Baden">
    <link rel="icon" href="gfx/favicon.ico">
    <title>Asteroids - Highschores - WIP</title>
    <link href="style/b.m.css" rel="stylesheet">
    <link href="style/highscores.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Asteroids</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Credits</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Bestenliste - Funktioniert</a></li>
            <li class="active"><a href="newest.php">Neuestes Spiel - Work in Progress<span class="sr-only">(current)</span></a></li>
            <li><a href="most.php">Öftester Spieler - Work in Progress</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="name.php">Suche nach Spielern - Funktioniert</a></li>
            <li><a href="number.php">Suche nach Spielnummer - Funktioniert</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Neuestes Spiel</h1>
            <?php 
            $xmlFile = 'highscores.xml'; 

            if (file_exists($xmlFile)) 
            { 
                $xml = simplexml_load_file($xmlFile); 
                echo '<div class="table-responsive">';
                  echo '<table class="table table-striped">';
                  echo '<th> Spielnumer';
                  echo '<th> Name';
                  echo '<th> Highschore';
                  foreach ( $xml->spiel as $spiel )
                  {   
                    echo '<tr>';
                     echo '<td>' . $spiel['id'] . '</td>';
                     echo '<td>' . $spiel->name . '</td>';
                     echo '<td>' . $spiel->score . '</td>';
                    echo '</tr>';
                  }   
                  echo '</table>';
                  echo '</div>';
                     
            } 
            else
            { 
                exit("Datei $xmlFile kann nicht geoeffnet werden."); 
            } 
          ?>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/b.m.js"></script>
  </body>
</html>
