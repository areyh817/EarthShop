<?php
$idx = $_GET['idx'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--반응형-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="css/pduct.css">
    <!--부트스트랩 링크-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!--메뉴 배너-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!--아이콘 및 이름-->
    <link href="https://cdn.imweb.me/thumbnail/20200106/f13e1a60db177.png" rel="shortcut icon" type="image/x-icon">
    <title>지구샵</title>
</head>
<body>
   <!--상단 main Logo-->
   <div class = "main">
        <a href="#">
            <img src="https://cdn.imweb.me/thumbnail/20210118/ca5f906b571ba.png" alt="" class = "mainLogo">
        </a>
     <!--nav-->
      <nav class = "navMain">
        <?php
        session_start();

        $url = "localhost";
        $id = "root";
        $password="111111";
        $db = "earth";

        $conn = mysqli_connect($url,$id,$password,$db);

        if(isset($_SESSION['user_id'])){
          if($_SESSION['user_id'] == "admin"){?><a href="admin.html" style="text-decoration:none">
          <span class = "joinNav">admin page</span></a>
          <?php
          }else
          ?><a href="mypage.php" style="text-decoration:none">
          <span class = "joinNav">My page</span></a>

        <?php } else { ?>

          <a href="join.html" style="text-decoration:none">
          <span class = "joinNav">Join</span>
          </a>
        <?php } 

        if(isset($_SESSION['user_id'])){
          ?><a href="cart.php" style="text-decoration:none">
          <span class = "loginNav">Cart</span>
          </a>
        <?php } else { ?>
          <a href="login.html" style="text-decoration:none">
          <span class = "loginNav">Login</span>
          </a>
        <?php }

        if(isset($_SESSION['user_id'])){
          ?> <a href="logout.php" style="text-decoration:none">
          <span class = "cartNav">Logout</span>
        </a>
        <?php } else { ?>
          <a href="" style="text-decoration:none">
          <span class = "cartNav">Cart</span>
        </a>
        <?php } ?>
      
        <a href="">
          <img src="img/loupe.png" alt="" class = "searchimg">
        </a>
      </nav>
    </div>
    
    <!--메뉴바-->
    <nav>
        <div class = "mainNav" style="z-index: 2;">
            <a href="" style="text-decoration:none">
                <span class = "nav1">ABOUT</span>
            </a>
            <a href="menu.php" style="text-decoration:none">
                <span class = "nav2">SHOP</span>
            </a>
            <a href="" style="text-decoration:none">
                <span class = "nav3">JOURNAL</span>
            </a>
            <a href="" style="text-decoration:none">
                <span class = "nav4">BOARD</span>
            </a>
            <a href="" style="text-decoration:none">
                <span class = "nav5">CONTACT</span>
            </a>
        </div>
    </nav>

    <!--HOME > SHOP > MENU-->
    <div id = "hsm">
        <a href="/index.html" style="text-decoration: none;">
            <span class = "hstxt">HOME&emsp;>&emsp;</span>
        </a>
        <a href="#" style="text-decoration: none;">
            <span class = "hstxt">SHOP&emsp;>&emsp;</span>
        </a>
        <a href="#" style="text-decoration: none;">
            <span class = "basictxt">LIVING</span>
        </a>
    </div>

    <div>
        <div id="content" style="float : left">
        <?php

            $url = "localhost";
            $id = "root";
            $password="111111";
            $db = "earth";

            $conn = mysqli_connect($url,$id,$password,$db);

            $sql="select * from product where pid='$idx'";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);

            for($i=0;$i<$num;$i++) {

            $re=mysqli_fetch_array($result);


            ?>
            
            <div id="bigImages">
                <img src="https://cdn.imweb.me/thumbnail/20210602/621dbc9c27051.jpg" alt="" id="big">
            </div>
            <div id="smallImages">
                <img src="<?php echo $re[6] ?>" alt="" class="small">
                <img src="<?php echo $re[7] ?>" alt="" class="small">
                <img src="https://cdn.imweb.me/thumbnail/20210602/5aef18d782bb2.jpg" alt="" class="small"> 
            </div>
        </div>
        <br>
        <div class = "info_box" style="padding-top: 40px;">
            <span class = "product_name"><?php echo $re[1] ?></span>
            <p class = "product_price"><?php echo $re[4] ?></p>
            <hr><br>
            <p class = "product_desc"><?php echo $re[2]?></p> 
            <span class = "product_detail" style="line-height: 1;">원산지</span>
            <span class = "product_detail_an" style="line-height: 1;"><?php echo $re[3]?></span><br>
            <span class = "product_detail" style="line-height: 1;">브랜드</span>
            <span class = "product_detail_an"><?php echo $re[5]?></span>
            
                
        </div>
    </div>
    <?php } ?>


    <script src="pdcut.js"></script>
</body>
</html>