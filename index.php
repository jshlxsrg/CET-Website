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
  <div class="leftcolumn">
    <div class="card">
      <h2><a href="topics.php">Topics</h2></a>
      <h4>In here are some website ideas for you to help get you started on your website.</h4>
      <img src = "static/ideas.jpeg" height= "400px" width = "100%" margin = "auto">

    </div>
    <div class="card">
      <h2> <a href = "resources.php" > Resources</h2> </a>
      <h4>In here you can find different videos and tutorials from professionals to help you develop your website</h4>
      <img src = "static/resources.jpg" height= "300px" width = "100%" margin = "auto">
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3><a href = "about.php">About the Devs</a></h3>
      <img src="static/cores.jpg" height="81px">
      <img src="static/moshi.jpg" height="81px">
      <h4>Lx and Moshi</h4>
    </div>
    <div class="card">
      <h3>Follow us</h3>
      <h5>Facebook: <a href="https://www.facebook.com/mooossshhhiii0811">Mark Joshua Artuza</h5></a>
      <h5>Facebook: <a href="https://www.facebook.com/jshlxsrg/">Joshua Alexis Urag</h5></a>
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



