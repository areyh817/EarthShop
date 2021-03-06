<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--css link-->
    <link rel="stylesheet" href="css/cart.css">
    <!--아이콘 및 이름-->
    <link href="https://cdn.imweb.me/thumbnail/20200106/f13e1a60db177.png" rel="shortcut icon" type="image/x-icon">
    <title>지구샵</title>
    <title>Document</title>
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
        $id = "rashop";
        $password="01l3KL2tHqiIx61T";
        $db = "rashop";

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
          <a href="#" style="text-decoration:none">
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

    <h1 class = "cart_title">장바구니</h1>

    <table>
      <tr>
        <tr class = "menu_title">
          <td class = "line">
            <span>item</span>
          </td>
          <td>
            <span>수량</span>
          </td>
          <td>
            <span>가격</span>
          </td>
        </tr>

      </tr>
    </table>
</body>
</html>    