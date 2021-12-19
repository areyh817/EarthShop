<?php

session_start();

$url = "localhost";
$id = "rashop";
$password="01l3KL2tHqiIx61T";
$db = "rashop";

$conn = mysqli_connect($url,$id,$password,$db);


    if(isset($_POST['id'])&&isset($_POST['pw'])){
        $uid = $_POST['id'];
        $upw = $_POST['pw'];

        $sql="SELECT * FROM user where uid='$uid'&&pw='$upw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
          $_SESSION['user_id'] = $uid;
          echo "<script>alert('로그인 되었습니다.');</script>";
          ?>
          <meta http-equiv="refresh" content="1;url=../index.php">
          <?php
        } else echo "아이디 또는 비밀번호가 일치하지 않습니다.";
      }


?>