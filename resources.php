<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="static/w.png"/>
</head>
<body>
<?php
define('NAME1', 'JOSHUA ALEXIS URAG');
define('NAME2', 'MARK JOSHUA ARTUZA');
?>
<title><?php echo "WEBSTER"; ?> </title>

<div class="header">
  <img src = "static/w.png" height = "40px" width = "45px"><h1>WEBSTER</h1>
  <p>Not the dictionary one, but a website that helps you make a website!</p>
</div>

<div class="topnav">
  <a href="index.php"><b>Home</b></a>
  <a href="topics.php"><b>Topics</b></a>
  <a href="resources.php"><b>Resources</b></a>
  <a href="about.php" style="float:right"><b>About<b></a>
</div>

<div class="row">
    <div class="fakeimg">
        <h2>Resources</h2>    
    </div>
  <div class = "leftcolumn">
    <div class="card">
   <p> Here are some basic HTML videos to get you started on that website! <p>
      <iframe width="420" height="315"
         src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe>
      <iframe width="420" height="315"
         src="https://www.youtube.com/embed/-USAeFpVf_A">
      </iframe>
    </div>
    <div class = "card">
      <p> w3schools also has a complete tutorial on HTML. Click on the link below to check them out.</p>
      <a href="https://www.w3schools.com/html/"> w3schools Tutorial</a>
      <img src = "static/w3schools.PNG" height= "400px" width = "1100px" >
    </div>

  </div>
   


</div>

<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>
</body>
</html>