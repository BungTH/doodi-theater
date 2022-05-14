<?php 
  session_start();
  require_once 'config/db.php';
  $_SESSION['movie'] = "MV01"
  if($_SESSION['customerLogin'] == 0) { 
    $_SESSION['error'] = "Please Login first";
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dodi Theater</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shotcut icon" href="img/logo/Dodi_theater_white.png">
    <link rel="stylesheet" type="text/css" href="css/global.css"/>
    <link rel="stylesheet" type="text/css" href="css/spider-man-no-way-home.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
  </head>

  <body style="background:#000000">
    <!--Navigate Bar-->
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-logo" href="index.html">
          <img src="img/logo/Dodi_theater_white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <!--Main Page-->
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <!--Movie-->
            <li class="nav-item">
              <a class="nav-link" href="all-movie-info.html">Movie </a>
            </li>
          </ul>
          <a class="navbar-logo-user" href="login-account-customer.html">
            <img src="img/logo/user-logo.png">
          </a>
        </div>
      </nav>
    </section>
    <!--Half Top Part-->
    <div class="container-fluid">
        <img id="Movie-Banner" src="img/movie/no-way-home.png">
        <a id="Movie-Name">Spider-Man: No Way Home</a>
        <a id="Movie-Genre">Genre : Action, Comedy, Sci-fi, Superhero, Adventure, Fantasy</a>
        <a id="Movie-Desc">Movie Description : When a spell goes wrong, dangerous foes from other worlds start to appear, 
          forcing Peter to discover what it truly means to be Spider-Man. Peter Parker's secret identity is revealed to 
          the entire world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man.</a>
        <a id="Big-Text1">Theater</a>
        <a id="Big-Text2">Show Time</a>
        <form id="Sign-Form" action="seat-booking.html">
          <div class="row">
            <div class="col-md-4">
              <input type="radio" name="options" id="option1" autocomplete="off">
              <label for="option1">Ya Theater</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="options" id="option2" autocomplete="off">
              <label for="option2">Uan Theater</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="options" id="option3" autocomplete="off">
              <label for="option3">Sun Theater</label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <input type="radio" name="options" id="option4" autocomplete="off">
              <label for="option4">Cheetah Theater</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="options" id="option5" autocomplete="off">
              <label for="option5">Bung Theater</label>
            </div>
          </div>
          <br><br><br><br><br><br>
          <div class="row">
            <div class="col-md-4">
              <input type="radio" name="time1" id="option1" autocomplete="off">
              <label for="option1">11:30</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="time2" id="option2" autocomplete="off">
              <label for="option2">14:00</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="time3" id="option3" autocomplete="off">
              <label for="option3">16:30</label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <input type="radio" name="time4" id="option4" autocomplete="off">
              <label for="option4">19:00</label>
            </div>
            <div class="col-md-4">
              <input type="radio" name="time5" id="option5" autocomplete="off">
              <label for="option5">21:30</label>
            </div>
          </div>
          <input type="submit" class="ghost-button" value="Confirm">
        </form>
        <a href="all-movie-info.html"><button type="button" class="ghost-button2">Back</button></a>
        <div class="container" id="Linear-BG1"></div>
        <div class="container" id="Linear-BG2"></div>
      <img src="img/background/line-bg-dark.png" style="width: 100%">
      <img src="img/background/line-bg-dark.png" style="width: 100%">
    </div>
  </body>
</html>