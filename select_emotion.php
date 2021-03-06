<?php
  require 'redirect.php';

  session_save_path("/webpages/isantill/mcc/sessions");
  session_start(); // must start session before any HTML

  unset($_SESSION['lyrics']); // clear all lyrics every time you go to select emotion page
  $_SESSION['phraseCount'] = 0; // clear phrase count
  
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Select Feeling</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link href="css/mcc_style.css" rel="stylesheet" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
  </head>
  <body>
    <div class="wholepage">
      <a style="display:block height:100%" href="">
        <div class="leftcolumn">
           
          <?php
          if(isset($_SESSION['emotion'])){
            echo '<span class="leftcolumntext">Current Feeling:</span>';  
            echo '<img src="images/feeling_' . $_SESSION['emotion'] . '.jpeg" alt="' . $_SESSION['emotion'] . '">';
          }else{
            echo 'Welcome!<br><br>Select a feeling on the right to begin songwriting';
          }
          ?>
          <!-- <img src="images/feeling_sadness.jpeg" alt="sadness"> -->
        </div>
      </a>
      <div class="rightcolumn">
        <h1 class="heading">How are you feeling today?</h1>
        <div class="add_course_form" id="add_course_form" >
        <form action="build_lyrics.php" method="post" >
            
            <button type="submit" name="selectedEmotion" class="feelingButton" value="sad">
                <img src="images/feeling_sad.jpeg">
            </button>
            <button type="submit" name="selectedEmotion" class="feelingButton" value="happy">
                <img src="images/feeling_happy.jpeg">
            </button>
            <button type="submit" name="selectedEmotion" class="feelingButton" value="mad">
                <img src="images/feeling_mad.jpeg">
            </button>
            <button type="submit" name="selectedEmotion" class="feelingButton" value="excited">
                <img src="images/feeling_excited.jpeg">
            </button>
            <!-- <button type="submit" name="selectedEmotion" class="feelingButton" value="frustrated">
                <img src="images/feeling_frustrated.jpeg">
            </button> -->
        </form>
      </div>
    </div> 
  </body>
</html>