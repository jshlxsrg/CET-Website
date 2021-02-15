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
  <a href="main.php">Home</a>
  <a href="topics.php">Topics</a>
  <a href="resources.php">Resources</a>
  <a href="about.php" style="float:right">About</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Date</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>More texts...?</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>More texts...</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About the Devs</h2>
      <img src="cores.jpg" height="90px">
      <img src="moshi.jpg" height="90px">
      <p>Lx and Moshi</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow us</h3>
      <p>DOTA2 ID: 453608560</p>
    </div>
  </div>
</div>

<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>

</body>
</html>
