<?php

$url = "localhost";
$id = "root";
$password="111111";
$db = "earth";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$pname = $_POST["pname"];
$pdesc = $_POST["pdesc"];
$pcountry = $_POST["pcountry"];
$pprice = $_POST["pprice"];
$pbrand = $_POST["pbrand"];

$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['img1']['name']);

/*if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file)){
    echo "<script>alert('데이터 삽입 성공');</script>";}
else{ echo "<script>alert('데이터 삽입 실패');</script>";} */


// insert해주기
$sql = "insert into product(pname, pdesc, pcountry, pprice, pbrand) values('$pname','$pdesc', '$pcountry', '$pprice', '$pbrand')";
$result = mysqli_query($conn, $sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
?>

<meta http-equiv="refresh" content="1;url=index.php">
