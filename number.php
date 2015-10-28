<!DOCTYPE html>
<html>
<?php
$thisPage = "number";
$searchContent = "id";
include '/include/header.php';
?>

<body>

<?php include '/include/mainNav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include '/include/sideNav.php'; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Suche nach Spielnummer</h1>

            <form class="form" action="number.php" method="post">
                <div class="form-group">
                    <label for="name">Spielnummer: </label>

                    <div class="row">
                        <div class="col-lg-4 right-offset-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search"
                                       placeholder="<?php if (isset($_POST['search'])) {
                                           echo $_POST['search'];
                                       } else {
                                           echo 'Spielnummer';
                                       } ?>">

                                <div class="input-group-addon">* um alle anzuzeigen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Suchen</button>
            </form>

            <br><br>

            <?php
            $xmlFile = 'highscores.xml';

            if (file_exists($xmlFile)) {
                $xml = simplexml_load_file($xmlFile);

                include '/include/showTable.php';

            } else {
                exit("Datei $xmlFile kann nicht geoeffnet werden.");
            }
            ?>
        </div>


    </div>
</div>
<?php include '/include/footer.php'; ?>
</body>
</html>
