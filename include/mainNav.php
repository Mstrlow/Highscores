<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tobias
 * Date: 28.10.2015
 * Time: 17:40
 */
?>
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
          <?php
          $creditsLink = '<a href="#">Credits';
          $helpLink = '<a href="#">Help';

          if($thisPage == "credits")
          {
              echo '<li class="active">';
              echo $creditsLink;
              echo '<span class="sr-only">(current)</span>';
          }
          else
          {
              echo ' <li>';
              echo $creditsLink;
          }
          if($thisPage == "help")
          {
              echo '<li class="active">';
              echo $helpLink;
              echo '<span class="sr-only">(current)</span>';
          }
          else
          {
              echo ' <li>';
              echo $helpLink;
          }
          echo '</a></li>';
          ?>
      </ul>
    </div>
  </div>
</nav>