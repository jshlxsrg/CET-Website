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
        <h2>Topics</h2> 
    </div>
</div>
<div class = "row">
    <div class = "bleftcolumn">
        <div class="card">
          <div class = "fakeimg">
            <ol>
              <li><b>Personal Blog:</b> Write about anything and everything in your life, for fun.</li>
              <img src = "static/personal-blog.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Your Own Company Website:</b> Create a website for your small business and promote it through social media.</li>
              <img src = "static/company.png" height = "300px" width = "50%" margin = "auto">
              <li><b>How-To-Do-Something website:</b>Where you show people how to do something through a blog, like how to code a website.</li>
              <img src = "static/how-to-do-something.png" height = "300px" width = "50%" margin = "auto">
              <li><b>Review site:</b>Dedicate your blog on reviewing things, and become an Amazon affiliate to get paid while doing it!</li>
              <img src = "static/reviewsite.png" height = "300px" width = "50%" margin = "auto">
              <li><b>Adventure blog:</b>Where you document all your adventures of hot air ballooning, sky-diving and surfing. Buy a Go-Pro Camera.</li>
              <img src = "static/adventure.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Frugal Website:</b>How to save money as a college student, single mom or just show others how you can get rich by not buying anything.</li>
              <img src = "static/frugal.png" height = "300px" width = "50%" margin = "auto">
              <li><b>Video Game Website:</b> Upload videos of your screen while you play your favorite game and gather a following on your YouTube / website.</li>
              <img src = "static/video-games.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>What Would You Do Website:</b>Where you create hypothetical situations and ask readers, what would they do?</li>
              <img src = "static/What-Would-You-Do.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Learn a Foreign Language Website:</b> Learn how to speak a new language and write about it! Show others your struggles, what helps you and your learning process.</li>
              <img src = "static/foreign-language.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Meme Site:</b>Collect images of memes and post it on your blog.</li>
              <img src = "static/memes.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Dating Tips Website:</b>Give tips on dating and how to meet people online and in the real world! I’ve personally tried this, it’s fun.</li>
              <img src = "static/dating-tips.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>FanFiction Blog:</b>Write made-up stories of your favorite movies and books.</li>
              <img src = "static/fan-fiction.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>The Nothing Website: </b>Make a site about nothing and just leave it blank.</li>
              <img src = "static/blank.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>Sports Blog:</b> All about your favorite things about sports.</li>
              <img src = "static/sports.jpg" height = "300px" width = "50%" margin = "auto">
              <li><b>And finally, create a website on making a website! Like this website. It’s fun, and you can learn as you go.</b></li>
              <img src = "static/website.jpg" height = "300px" width = "50%" margin = "auto">
            </ol> 
              <h2><a href="http://www.markammay.com/100-creative-ideas-for-a-website/" style = "color: black">Mark Ammay</h2></a>
              <h3><b>Check out Mark Ammay's Website for more!</b></h3>
              <img src = "static/mark-ammay.PNG" height = "600px" width = "100%" margin = "auto">
          </div>
        </div>
    </div>
</div>



<div class="footer">
<?php echo '&copy; ', date('Y'), ' ', NAME1 ,' and ', NAME2, ' :: Rundate ', date('m/d/Y'); ?>
</div>

</body>
</html>
