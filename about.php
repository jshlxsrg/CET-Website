<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
define('NAME1', 'JOSHUA ALEXIS URAG');
define('NAME2', 'MARK JOSHUA ARTUZA');
?>
<title><?php echo "WEBSTER"; ?> </title>

<div class="header">
  <h1>WEBSTER</h1>
  <p>Not the dictionary one, but a website that helps you make a website!</p>
</div>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="topics.php">Topics</a>
  <a href="resources.php">Resources</a>
  <a href="about.php" style="float:right">About</a>
</div>
<div class="row">
    <div class="header">
        <h2>About the Developers</h2> 
    </div>
    <div class="leftcolumn" style="width: 1500px;">
      <div class="card">
        <a href="https://www.facebook.com/jshlxsrg/"><h2>Joshua Alexis Urag</h2></a>
        <img src = "static/cores.jpg" height="500px">
        <p>A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering.</p>
        <p>Pagod na sa buhay dahil nakakapunyeta lang </p>
      </div>
      <div class="card">
        <a href="https://www.facebook.com/mooossshhhiii0811"><h2>Mark Joshua Artuza</h2></a>
        <img src = "static/moshi.jpg" height="500px">
        <p>A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering.</p>
        <p>soon to be drug lord xd</p>
      </div>
    </div>
</div>


<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>
</body>
</html>