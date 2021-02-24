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
<title><?php echo "WEBSTER"; ?> </title> <link rel="icon" href="/static/w.jpg/favicon.jpg">

<div class="header"> 
    <img src = "static/w.png" height = "40px" width = "45px"><h1> WEBSTER </h1> 
    <p>Not the dictionary one, but a website that helps you make a website!</p>
    
  </div> 
</div>



<div class="topnav">
  <a href="index.php"><b>Home</b></a>
  <a href="topics.php"><b>Topics</b></a>
  <a href="resources.php"><b>Resources</b></a>
  <a href="about.php" style="float:right"><b>About<b></a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><a href = "topics.php" >  Topics</h2> </a>
      <h5>In here are some website ideas for you</h5>
      <img src = "static/ideas.jpeg" height= "400px" width = "1100px">
      <p>Creating text in your website</p>
      <p>Inserting shapes, pictures, and textbox</p>
    </div>
    <div class="card">
      <h2> <a href = "resources.php" > Resources</h2> </a>
      <h5>In here you can find different videos from professionals to help you make your website</h5>
      <img src = "static/resources.jpg" height= "400px" width = "1100px">
      <p>Check out these Youtubers!</p>
      <p>Tapos dito links ng yt nila pwede rin mga website na may guide din</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>About the Devs</h3>
      <img src="static/cores.jpg" height="81px">
      <img src="static/moshi.jpg" height="81px">
      <h4>Lx and Moshi</h4>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow us</h3>
      <h5>Facebook: </h5> <a href="https://www.facebook.com/mooossshhhiii0811"><h5>Mark Joshua Artuza</h5></a>
      <a href="https://www.facebook.com/jshlxsrg/"><h5>Joshua Alexis Urag</h5></a>
      <p>DOTA2 ID: 453608560</p>
      <p>Genshin Impact UID: 817160914<p>
    </div>
  </div>
</div>

<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>

</body>
</html>