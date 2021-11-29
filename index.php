<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--반응형-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="css/main.css">
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


    <style>

    </style>
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
            <a href="" style="text-decoration:none">
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

    <!--배너-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="margin-top: 10px; z-index:1">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bn01.jpg" class="d-block w-100" alt="" style="height: 550px; position: relative;">
            <p class = "bn01_txt01_h">욕실을 바꾸는 아이템,<br>씹어서 양치하는 고체치약!</p>
            <p class="bn01_txt01_m">지구샵 고체치약 30&150tbs</p>
          </div>
          <div class="carousel-item">
            <img src="https://cdn.imweb.me/thumbnail/20201102/b6a2c9a56d6db.jpg" class="d-block w-100" alt="" style="height: 550px; position: relative;">
            <p class = "bn02_txt01_h">우리가 해야 할<br>미세플라스틱 없는<br>진짜 설거지,
            </p>
            <p class="bn02_txt01_m">지구샵 주방비누</p>
          </div>
          <div class="carousel-item">
            <img src="https://cdn.imweb.me/thumbnail/20200716/c7195f6e94ef5.jpg" class="d-block w-100" alt="" style="height: 550px; position: relative;">
            <p class = "bn03_txt01_h">영수증 안 주셔도 돼요.<br>현명하게 거절하기
            </p>
            <p class="bn03_txt01_m">제로웨이스트 치어링 스티커팩</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--new arrivals-->
      <div class = "new">
        <span class = "newarrivals">NEW ARRIVALS</span>
      </div>

    <!-- Swiper -->
    <div class="slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' style="padding:30px 100px; margin-left: 60px;" >
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">        
          <img src="https://cdn.imweb.me/thumbnail/20210602/7905d0f7cd673.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210602/3607b480d0654.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/7905d0f7cd673.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[풍경방화] 인센스 홀더 수련화<span class="slider_menu_price1"><br>8,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210602/5e1e21ce5b371.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210602/22a4f3041a8b0.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/5e1e21ce5b371.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[자연으로] 친환경 샤워 퍼프<span class="slider_menu_price1"><br>3,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210602/c8bcbcd19d29e.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210602/73657c43a1345.jpg'" 
          onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/c8bcbcd19d29e.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">우드수저세트 S<span class="slider_menu_price1"><br>4,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210602/c457e70e9afbe.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210604/2cebea528fd56.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/c457e70e9afbe.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">라탄티코스터<span class="slider_menu_price1"><br>3,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210602/6e9847b524d84.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210602/e205435ccf2fb.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/6e9847b524d84.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">우드티스푼 L<span class="slider_menu_price1"><br>3,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210602/25e30d382ab01.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210602/f3dd675e462d0.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210602/25e30d382ab01.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">우드 수저받침<span class="slider_menu_price1"><br>2,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210507/c71888dc983b3.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210507/8347690371e33.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210507/c71888dc983b3.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[슬로비] 우린 일회용이 아니니깐<span class="slider_menu_price1"><br>16,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider"style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210507/d65caadcc90e0.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210507/a3b175ebfee82.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210507/d65caadcc90e0.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[슬로비] 그건 쓰레기가 아니라고요<span class="slider_menu_price1"><br>16,000원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
    </div>

    <!--MONTHLY BEST-->
    <div class = "new">
      <span class = "newarrivals">MONTHLY BEST</span>
    </div>

    <!-- Swiper -->
    <div class="slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' style="padding:30px 100px; margin-left: 60px;" >
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20201111/d1c2e575483b0.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210326/b07a4844deb84.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20201111/d1c2e575483b0.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">고체치약 150정입<span class="slider_menu_price1"><br>13,400원</span></span>
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20201111/46057a535484c.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20201111/d1c2e575483b0.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20201111/46057a535484c.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">고체치약 50정입<span class="slider_menu_price1"><br>5,900원</span></span>
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20200516/5d9fe76f72588.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20201113/26bd67f62975e.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20200516/5d9fe76f72588.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">대나무 칫솔 10p<span class = "slider_menu_sale"><br>38,000원</span><span class="slider_menu_price1">28,500원</span></span><br>
          <img src="img/new4.png" alt="" class="newimg2">
          <img src="img/sale2.png" alt="" class="newimg2">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20200516/5d9fe76f72588.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20201113/26bd67f62975e.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20200516/5d9fe76f72588.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">대나무칫솔(성인/어린이용)<span class = "slider_menu_sale"><br>3,800원</span><span class="slider_menu_price1">3,500원</span></span><br>
          <img src="img/new4.png" alt="" class="newimg2">
          <img src="img/sale2.png" alt="" class="newimg2">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210219/614ab4ab11b57.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210219/6e246c75fda69.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210219/614ab4ab11b57.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[조르단] 그린클린 칫솔<span class="slider_menu_price1"><br>3,900원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210609/6bd2a54c98469.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210609/9e1e9620457aa.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210609/6bd2a54c98469.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[티읕] 티읕컵<span class="slider_menu_price1"><br>34,900원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider" style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210609/85621c3b7457f.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210609/649baff8b7dbb.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210609/85621c3b7457f.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[스테이그린] 제로웨이스트 친환경 메모패드<br>(9x13)-필환경시대<span class="slider_menu_price1"><br>3,500원</span></span>
          <img src="img/new4.png" alt="" class="newimg">
        </a>
      </div>
      <div class="slider"style = "padding-right: 20px;">
        <a style="text-decoration: none;">
          <img src="https://cdn.imweb.me/thumbnail/20210608/c42018a133ab8.jpg" onmouseover="this.src='https://cdn.imweb.me/thumbnail/20210608/1fdfd724e6367.jpg'" onmouseout="this.src='https://cdn.imweb.me/thumbnail/20210608/c42018a133ab8.jpg'" style="width: 256px;">
          <span class = "slider_menu_txt1">[작아] 271호 특별호 '지구를 살리는 지도 - <br>플라스틱'<span class="slider_menu_price1"><br>13,900원</span></span>
        </a>
      </div>
    </div>

    <!--footer-->
    <footer>
      <!--밑줄긋기-->
      <hr style="height: 0.5px; width:1210px; margin: 0 auto; margin-top: 120px; color: rgb(167, 167, 167);">
      <!--고객센터-->
      <div class = "mfoot_1" style='line-height:18px'>
        <span style="font-size: 12.5px;"><strong>고객센터</strong><br></span>
        <span><strong>─────</strong><br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;">02-812-2050<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;"><strong>운영시간 </strong>10:00 ~ 17:00<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;"><strong>점심시간 </strong>12:00 ~ 13:00<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;">주말, 공휴일 휴무<br></span>
      </div>

      <!--지구샵 상도점-->
      <div class = "mfoot_12" style='line-height:18px'>
        <span style="font-size: 12.5px;"><strong>지구샵 상도점</strong><br></span>
        <span>
          <strong>─────</strong><br>
        </span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;">070-7721-3336<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;">서울특별시 동작구 성대로 1길 16, 1층<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;"><strong>영업일 </strong>목 - 일<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;"><strong>영업시간 </strong>14:00 ~ 20:30<br></span>
        <span style="font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif; font-size: 12px; color: #656565;"><strong>휴무일 </strong>월/화/수<br></span>
      </div>
      
      <!--HELP-->
      <div class = "mfoot_2" style='line-height:18px'>
        <span style="font-size: 12.5px;"><strong>HELP</strong><br></span>
        <span>
          <strong>─────</strong><br>
        </span>
        <a href="#" onMouseOver="this.innerHTML='공지사항'" onMouseOut="this.innerHTML='NOTICE'" class="foot_mouse">NOTICE</a><br>
        <a href="#" onMouseOver="this.innerHTML='자주묻는질문'" onMouseOut="this.innerHTML='FAQ'" class="foot_mouse">FAQ</a><br>
        <a href="#" onMouseOver="this.innerHTML='질문하기'" onMouseOut="this.innerHTML='Q&A'" class="foot_mouse">Q&A</a>
      </div>

      <!--SHIP-->
      <div class = "mfoot_3" style='line-height:18px'>
        <span style="font-size: 12.5px;"><strong>PAR TNER SHIP</strong><br></span>
        <span>
          <strong>────────</strong><br>
        </span>
        <a href="#" class="foot_mouse">입점제안</a><br>
        <a href="#" class="foot_mouse">협업/제안/인터뷰 문의</a><br>
        <a href="#" class="foot_mouse">대량주문(행사용)</a>
      </div>

      <!--아랫줄 긋기-->
      <hr style="height: 0.5px; width:1210px; margin: 0 auto; margin-top: 80px; color: rgb(167, 167, 167);">
      <div>
        <div style="margin-left: 150px; margin-top: 30px;">
          <a href="#" style="text-decoration: none;"><span class = "conditions">이용약관</span></a>
          <a href="#" style="text-decoration: none;"><span class = "info">개인정보처리방침</span></a>
          <a href="https://www.instagram.com/zerowaste_jigu/">
            <img src="img/instagram.png" class = "insta">
          </a>
        </div>
        <div style="margin-left: 150px; margin-top: 5px;">
          <span class = "foot_line1">
            회사명: 주식회사 피스온테이블&emsp;대표자: 김아리&emsp;사업자등록번호: 689-86-00791&emsp;통신판매업신고: 제2018-서울동작-0295
          </span>
          <a href="https://www.ftc.go.kr/www/bizCommView.do?key=232&apv_perm_no=2018319015830200295&pageUnit=10&searchCnd=wrkr_no&searchKrwd=6898600791&pageIndex=1" style="text-decoration: none;" class = "ari_info">사업자정보확인</a>
        </div>
        <div style="margin-left: 150px; margin-top: -6px;">
          <span class = "foot_line1">
            사업장소재지: 서울특별시 동작구 성대로1길 16, 1층&emsp;이메일: contact@jigushop.co.kr&emsp;개인정보보호담당자: 김아리&emsp;고객센터: 02-812-2050
          </span>
        </div>
        <div style="margin-left: 150px; margin-top: -6px; margin-bottom: 30px;">
          <span class = "foot_line1">
            Copyright ©PeaceOnTable, Inc. All rights reserved.&emsp;Hosting by (주)아임웹
          </span>
        </div>
      </div>
    </footer>





<!--script-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $('.slider').slick();
  $('.slider').slick({ 
    dots: true, //페이지 네비게이션 
    arrows:true, // next, prev 이동 버튼 
    autoplay:ture, // 자동 넘김 여부 
    infinite: false, //반복설정 
    speed: 300, //슬라이드 속도 
    autoplaySpeed : 10000, // 자동 넘김시 슬라이드 시간 
    pauseOnHover : true,// 마우스 hover시 슬라이드 멈춤 
    vertical : false, // 세로 방향 슬라이드 옵션 
    slidesToShow: 4, //보여질 슬라이드 수 
    slidesToScroll: 4, //넘겨질 슬라이드 수
    dotsClass : "slick-dots",     //아래 나오는 페이지네이션(점) css class 지정
    draggable : true,     //드래그 가능 여부 
});
</script>
</body>
</html>