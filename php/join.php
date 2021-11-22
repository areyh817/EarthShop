<?php

include ("db_conn.php");

// html로부터 값 가져오기
$uemail = $_POST["email"];
$upw = $_POST["upw"];
$upwchk = $_POST["pwchk"];
$uname = $_POST["uname"];
$ugender = $_POST["gender"];


$sql = "insert into user(name, email, pw, gender) values('$uname', '$uemail', '$upw', '$ugender')";
mysqli_query($conn, $sql);

?>