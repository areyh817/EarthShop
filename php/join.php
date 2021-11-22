<?php
echo "값 들어오는지 확인";
$url = "localhost";
$id = "root";
$password="111111";
$db = "earth";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$uid = $_POST["id"];
$upw = $_POST["pw"];
$upwchk = $_POST["pwchk"];
$uname = $_POST["name"];
$ugender = $_POST["gender"];

$sql = "insert into user(name, uid, pw, gender) values('$uname', '$uid', '$upw', '$ugender')";
mysqli_query($conn, $sql);

?>