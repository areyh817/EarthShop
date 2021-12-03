<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--반응형-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="css/mypage.css">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <div class = "mypage_menu_box">
      <div>
        <ul style = "float: left;">
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">주문 조회</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">위시 리스트</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">취소/교환/반품</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">쿠폰</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">포인트</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">1:1 문의</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">정보 수정</a></li>
          <li><a href="" style = "text-decoration: none;" class = "mypage_menu_list">회원 탈퇴</a></li>
        </ul>
      </div>
    </div>

    <!--프로필 이미지-->
    <div class = "mypage_profile_box">
          <img src="https://www.jigushop.co.kr/common/img/default_profile.png" alt="" class = "mypage_profile_img">
    </div>
    <?php

    $url = "localhost";
    $id = "root";
    $password="111111";
    $db = "earth";

    $conn = mysqli_connect($url,$id,$password,$db);

    $sql="select * from user where uid='$_SESSION['user_id']'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    for($i=0;$i<$num;$i++) {

    $re=mysqli_fetch_array($result);


    ?>
    <div class = "mypage_profile_info">
      <span class = "eco_lover"><b>Eco Lover</b></span>
      <span class = "people_hello"><?php echo $re[1] ?> 님 안녕하세요.</span><br>
      <span class = "level_info">구매금액 100,000원 달성 시</span><br>
      <span class="level_info2">Earth Lover 로 승급됩니다.</span>
    </div>

    <?php } ?>
</body>
</html>