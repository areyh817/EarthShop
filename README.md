# EarthShop :earth_asia:
"낭비없는 삶의 길잡이 지구샵" 웹사이트 클론코딩
<br><br>

호스팅 주소 : https://rashop.emirim.kr/
<br><br>

#### 실행 화면
<img src="https://geode-gem-7b6.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F5fde5f75-9b3f-4c29-8cf2-3a877be4c89a%2FUntitled.png?table=block&id=f20874e0-1477-4fe5-8012-01be4f01a3a2&spaceId=e92763c1-d739-496d-9b03-1671bf3014eb&width=2000&userId=&cache=v2">
<br>
<img src="https://geode-gem-7b6.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2Fce979bb3-b67a-412f-bb20-09a2555ce982%2FUntitled.png?table=block&id=f6fa16b6-a7d5-4d36-a227-89b93adba140&spaceId=e92763c1-d739-496d-9b03-1671bf3014eb&width=2000&userId=&cache=v2">

##### php와 MySQL을 이용한 로그인
 ```php
<?php

session_start();

$url = "localhost";
$id = "rashop";
$password="";
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
```
##### php와 MySQL을 이용한 회원가입
 ```php
<?php
$url = "localhost";
$id = "rashop";
$password="";
$db = "rashop";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$uid = $_POST["id"];
$upw = $_POST["pw"];
$uname = $_POST["name"];
$ugender = $_POST["gender"];

$sql = "insert into user(name, uid, pw, gender) values('$uname', '$uid', '$upw', '$ugender')";
mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="1;url=../index.php">

```
##### MySQL user table
```mysql
mysql> create table user(
    -> id int(100) auto_increment primary key,
    -> name varchar(100),
    -> uid varchar(100) not null,
    -> pw varchar(100) not null,
    -> gender varchar(100)
    -> );
```

#### 사용기술 / 개발환경
개발기간 : 2021.09 ~ 2021.11<br>
사용기술 : HTML, CSS, JavaScript, php, MySQL, Apache<br>
개발환경 : Visual Studio Code
<br><br>
