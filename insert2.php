<?php
echo "값 들어오는지 확인";
$url = "localhost";
$id = "rashop";
$password="01l3KL2tHqiIx61T";
$db = "rashop";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$name = $_POST["pname"];
$pdesc = $_POST["pdesc"];
$country = $_POST["pcountry"];
$price = $_POST["pprice"];
$brand = $_POST["pbrand"];


$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['img']['name']);
$upload_file2=$uploads_dir.basename($_FILES['img2']['name']);
$upload_file3=$uploads_dir.basename($_FILES['img3']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file) && move_uploaded_file($_FILES['img2']['tmp_name'],$upload_file2) && move_uploaded_file($_FILES['img3']['tmp_name'],$upload_file3)){
    echo "<script>alert('데이터 삽입 성공');</script>";}
else{ echo "<script>alert('데이터 삽입 실패');</script>";} 

if ( !mysqli_query ($conn,"insert into product(name, pdesc, country, price, brand, img, img2, img3) values('$name', '$pdesc', '$country', '$price', '$brand', '$upload_file', '$upload_file2', '$upload_file3')") )

{

echo("쿼리오류 발생: " . mysqli_error($conn));

} else{
    echo "잘 들어감1";
}


?>