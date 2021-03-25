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
        <h2>Resources</h2>    
    </div>
  <div class = "bleftcolumn">
    <div class = "card">
      <div class = "fakeimg">
        <p> For Hard Coding you need to learn HTML and CSS</p>
        <p> w3schools also has a complete tutorial on HTML and CSS. Click on the link below to check them out.</p>
        <h3><a href="https://www.w3schools.com/html/" style = "color: black"> w3schools HTML Tutorial</h3></a>
        <img src = "static/w3schools.PNG" height= "400px" width = "100%" margin = "auto" >
        <h3><a href="https://www.w3schools.com/css/" style = "color: black"> w3schools CSS Tutorial</h3></a>
        <img src = "static/CSS.PNG" height= "400px" width = "100%" margin = "auto" >
      </div>
    </div>
    <div class = "card">
      <div class = "fakeimg">
        <p> If you don't have time to learn a programmming. There are websites that teach you how</p>
        <p> Website Setup has an easy step-by-step guide for beginners. Click on the link below to check them out.</p>
        <h3><a href="https://websitesetup.org" style = "color: black"> Website Setup</h3></a>
        <img src = "static/website-setup.PNG" height= "400px" width = "100%" margin = "auto" >
      </div>
    </div>
    <div class="card">
      <div class = "fakeimg">
        <p> Here are some basic HTML videos to get you started on that website! <p>
          <iframe width = "auto" margin = "auto"height="315"
            src="https://www.youtube.com/embed/-USAeFpVf_A">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/pQN-pnXPaVg">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/3Wd2uEsbc_c">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/zmun7JzWGPE">
          </iframe>
        <iframe width = "100" margin = "auto"height="100"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=0">
        </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/PlxWf493en4">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/El1BhIQFMfs">
          </iframe>
          <iframe width = "auto" margin = "auto" height="315"
            src="https://www.youtube.com/embed/kMT54MPz9oE">
          </iframe>
      </div>
  </div>
</div>
   

</div>

<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>
</body>
</html>
