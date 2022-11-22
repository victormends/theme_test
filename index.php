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
  
    <div class="header" >
        <h1>a website created</h1>
        <p>certainly one website</p>
      </div>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" > -->

    <!-- Top Navigation Menu -->
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="myTopnav" class="topnav">%3$s</ul>'        )
      )
    ?>
    
    <div class="topnav" id="myTopnav" >
      <a href="index.php" class="active noselect">home</a>
      <a href="news.php" class="noselect">news</a>
      <a href="cont.php" class="noselect">contact</a>
      <a href="about.php" class="noselect">about</a>
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
              <a>idk what else to put in here please help me lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum excepturi doloremque expedita mollitia odit vel quo debitis, minima optio, libero, fugit consequuntur quidem. Delectus ipsa quasi porro officia distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum earum necessitatibus laboriosam?</a>
            </div>
            
        </div>
        <div class="main">
            <h1>some important random info</h1>
              <div class="content">
                <a>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid ab, magnam eveniet earum nobis repellat quia id dolore mollitia harum a quasi commodi officiis porro possimus rem repellendus. Quibusdam, quidem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quo alias adipisci fugit deleniti, voluptatem quae labore vero eos debitis? Dolor dicta voluptate aliquam velit quidem commodi explicabo cum ex! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptas soluta, consectetur obcaecati numquam eius sapiente hic ipsa earum. Rem tempora corporis blanditiis quibusdam eligendi distinctio nam culpa dicta ipsam! <br><br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores dolore molestiae ex quod accusantium doloribus repellendus a atque? Maiores deleniti iure cum libero, officiis repellat dicta. Rem non numquam quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, dolore tenetur! Earum, doloribus rerum minus laborum accusamus voluptate quis vitae nihil consectetur iste. Laboriosam deleniti veniam sint consectetur saepe nostrum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure porro aperiam cum eius ullam cumque quos, at deserunt ea recusandae ipsa praesentium minus incidunt ex voluptatem. Saepe nihil consequatur porro? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor minima ex dolore soluta, cum deserunt commodi corporis nisi perferendis, rerum quisquam ut voluptatem adipisci cupiditate quaerat provident. Magni, explicabo quos. <br> <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero numquam nisi exercitationem doloremque perferendis est minus nemo. Sed eum molestiae dolor voluptate mollitia saepe minima, eos debitis ratione aperiam facilis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati nemo numquam ipsum quasi libero sed pariatur deserunt quidem. Blanditiis voluptatem temporibus rerum qui aliquam rem id accusamus magnam dolore sed.</a>

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