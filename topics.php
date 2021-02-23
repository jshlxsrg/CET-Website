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
    <div class="fakeimg">
        <h2>Topics</h2> 
    </div>
</div>

<div class = "leftcolumn">
    <div class="card">
    <ol>
    <li><b>Personal Blog:</b> Write about anything and everything in your life, for fun.</li>
    <li><b>Your Own Company Website:</b> Create a website for your small business and promote it through social media.</li>
    <li><b>How-To-Do-Something website:</b>Where you show people how to do something through a blog, like how to code a website.</li>
    <li><b>Review site:</b>Dedicate your blog on reviewing things, and become an Amazon affiliate to get paid while doing it!</li>
    <li><b>Adventure blog:</b>Where you document all your adventures of hot air ballooning, sky-diving and surfing. Buy a Go-Pro Camera.</li>
    </ol> 
    </div>
</div>
<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>

