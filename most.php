<!DOCTYPE html>
<html>
<?php include '/include/header.php'; ?>

<body>
<body>

<?php
$thisPage = "most";
include '/include/mainNav.php';
?>


<div class="container-fluid">
  <div class="row">
    <?php
    $thisPage = "most";
    include '/include/sideNav.php';
    ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Öftester Spieler</h1>



            <?php 
            $xmlFile = 'highscores.xml'; 

            if (file_exists($xmlFile)) 
            { 
                $xml = simplexml_load_file($xmlFile);

                $id = 'home';
                include '/include/showTable.php';

            } 
            else
            { 
                exit("Datei $xmlFile kann nicht geoeffnet werden."); 
            } 
          ?>
        </div>



      </div>
    </div>
    <?php include '/include/footer.php'; ?>
</body>
</html>
