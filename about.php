<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body> 
  
    <div class="header">
        <h1>a website created</h1>
        <p>certainly one website</p>
      </div>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Top Navigation Menu -->
    <div class="topnav" id="myTopnav">
      <a href="index.php">home</a>
      <a href="news.php">news</a>
      <a href="cont.php">contact</a>
      <a href="about.php" class="active">about</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
      <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->

    </div>
    <div class="row">
        <div class="side">
            <h1>posts</h1>
            <ul class="posts">
              <li><a href="1.php">the truth about pastafarianism.</a></li>
              <li><a href="1.php">can penguins eat soup?</a></li>
              <li><a href="1.php">zimbabwe will win the next world cup.</a></li>
              <li><a href="1.php">cup noodles: a mechanism of world domination?</a></li>
              <li><a href="1.php">is sponge bob square pants an alien?</a></li>
              <li><a href="1.php">R is the best language for neural regression.</a></li>
              <li><a href="1.php">why are the fonts so green and this site so dark?</a></li>
              <li><a href="1.php">breaking news: you should drive with you eyes wide shut.</a></li>
              <li><a href="1.php">how to make a bad website</a></li>
            </ul>

            <div class="extra">
              <a>idk what else to put in here please help me lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum excepturi doloremque expedita mollitia odit cum vel quo debitis, minima optio, libero, fugit consequuntur quidem. Delectus ipsa quasi porro officia distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum earum necessitatibus laboriosam?</a>
            </div>
            
        </div>
        <div class="main">
            <h1>lol</h1>
              <div class="content">
                <iframe src="https://www.youtube.com/embed/iik25wqIuFo?autoplay=1&controls=0" frameborder="0" allowfullscreen="0" data-external="1"></iframe>
              </div>
        </div>
    </div>
    <div class="footer">
        <h2>there is nothing in here, go away</h2>
      </div>
      <?php wp_footer(); ?>

    <!-- <script src="./script.js"></script> -->
</body>
</html>