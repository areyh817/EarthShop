<?php
echo "값 들어오는지 확인";
$url = "localhost";
$id = "root";
$password="111111";
$db = "earth";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$name = $_POST["pname"];
$pdesc = $_POST["pdesc"];
$country = $_POST["pcountry"];
$price = $_POST["pprice"];
$brand = $_POST["pbrand"];
echo $name." ".$desc." ".$country." ".$price." ".$brand;


$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file)){
    echo "<script>alert('데이터 삽입 성공');</script>";}
else{ echo "<script>alert('데이터 삽입 실패');</script>";}

$sql = "insert into product(name, pdesc, country, price, brand, img) values('$name', '$pdesc', '$country', '$price', '$brand', '$upload_file')";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);

 }


?>