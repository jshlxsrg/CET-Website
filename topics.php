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
<div class = "row">
    <div class = "leftcolumn">
        <div class="card">
          <ol>
            <li><b>Personal Blog:</b> Write about anything and everything in your life, for fun.</li>
            <li><b>Your Own Company Website:</b> Create a website for your small business and promote it through social media.</li>
            <li><b>How-To-Do-Something website:</b>Where you show people how to do something through a blog, like how to code a website.</li>
            <li><b>Review site:</b>Dedicate your blog on reviewing things, and become an Amazon affiliate to get paid while doing it!</li>
            <li><b>Adventure blog:</b>Where you document all your adventures of hot air ballooning, sky-diving and surfing. Buy a Go-Pro Camera.</li>
            <li><b>Frugal Website:</b>How to save money as a college student, single mom or just show others how you can get rich by not buying anything.</li>
            <li><b>Video Game Website:</b> Upload videos of your screen while you play your favorite game and gather a following on your YouTube / website.</li>
            <li><b>What Would You Do Website:</b>Where you create hypothetical situations and ask readers, what would they do?</li>
            <li><b>Learn a Foreign Language Website:</b> Learn how to speak a new language and write about it! Show others your struggles, what helps you and your learning process.</li>
            <li><b>Meme Site:</b>Collect images of memes and post it on your blog.</li>
            <li><b>Dating Tips Website:</b>Give tips on dating and how to meet people online and in the real world! I’ve personally tried this, it’s fun.</li>
            <li><b>FanFiction Blog:</b>Write made-up stories of your favorite movies and books.</li>
            <li><b>The Nothing Website: </b>Make a site about nothing and just leave it blank.</li>
            <li><b>Sports Blog:</b> All about your favorite things about sports.</li>
            <li><b>And finally, create a website on making a website! Like this website. It’s fun, and you can learn as you go.</b></li>
          </ol> 
        </div>
    </div>
</div>

<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>

