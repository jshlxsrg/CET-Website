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
define('TITLE1', 'WEB');
define('TITLE2', 'HUB');

?>
<title><?php echo TITLE1.TITLE2; ?> </title> <link rel="icon" href="/static/w.jpg/favicon.jpg">

<div class="header"> 
    <img src = "static/w.png" height = "40px" width = "45px"><h1> <?php echo TITLE1.'<span style = "color: #f78c00;">HUB</span>' ?> </h1> 
    <p>Not the dictionary one, but a website that helps you make a website!</p>
    
  </div> 
</div>
<div class="topnav">
  <a href="index.php"><b>Home</b></a>
  <a href="topics.php"><b>Topics</b></a>
  <a href="resources.php"><b>Resources</b></a>
  <a href="about.php" style="float:right"><b>About</b></a>
</div>

  <div class="row">
      <div class="title">
          <h2>About the Developers</h2> 
      </div>
      <div class="bleftcolumn" >
          <div class="card">
            <a href="https://www.facebook.com/jshlxsrg/"><h2>Joshua Alexis Urag</h2></a>
            <h5 style = "float:right">A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering. 
          Pagod na sa buhay dahil nakakapunyeta lang hehe</h5>
            <img src = "static/cores.jpg" height="500px">            
          </div>

          <div class="card">
            <a href="https://www.facebook.com/mooossshhhiii0811"><h2>Mark Joshua Artuza</h2></a>
            <h5 style = "float:right">A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering. 
          Soon to be drug lord xDDDDDDDDDDDDDDDDDD</h5>
            <img src = "static/moshi.jpg" height="500px">
          </div>
      </div>
  </div>



<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>
</body>
</html>
