<?php

$url = "localhost";
$id = "root";
$password="111111";
$db = "earth";

$conn = mysqli_connect($url,$id,$password,$db);


    if(isset($_POST['id'])&&isset($_POST['pw'])){
        $uid = $_POST['id'];
        $upw = $_POST['pw'];

        $sql="SELECT * FROM user where uid='$uid'&&pw='$upw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
          echo "사용자 이름= $uid";
          echo "</br>로그인 성공";
        } else{
          echo "login fail";
        }
      }


?>