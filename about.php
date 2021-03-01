<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="static/w.png"/>
</head>
<body>

<?php include 'header.php';?>

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
            <h2>Joshua Alexis Urag</h2>
            <h4>|| <a href="https://www.facebook.com/jshlxsrg/">Facebook</a> || 
            <a href="https://www.github.com/jshlxsrg/">Github</a> ||<a href = "https://steamcommunity.com/id/twicelx"> Steam </a> ||</h4>
            <pre style = "float:right" font-size= 15px><span class="inner-pre" style="font-size: 16px">Head Developer

Age: 21

A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering. 

Professional Feeder at DOTA 2



</span></pre>
            <img src = "static/cores.jpg" height="300px" width = "auto" margin = "auto">            
          </div>
          <div class="card">
          <h2>Mark Joshua Artuza</h2>
            <h4>|| <a href="https://www.facebook.com/mooossshhhiii0811">Facebook</a> || </h4>
            <pre style = "float:right" font-size= 15px><span class="inner-pre" style="font-size: 16px">Head of Content

Creative Designer

Age: 21

A third year college student in Polytechnic University of the Philippines currently studying Bachelor of Science in Computer Engineering. 

Manga Weeb


</span></pre>
            <img src = "static/moshi.jpg" height="300px" width = "auto" margin = "auto">            
          </div>
          
      </div>
  </div>
  


<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>
</body>
</html>