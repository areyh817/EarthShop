<?php
$idx = $_GET['idx'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--프로필 미리보기 이미지-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <!--css link-->
    <link rel="stylesheet" href="css/admin.css">
    <!--아이콘 및 이름-->
    <link href="https://cdn.imweb.me/thumbnail/20200106/f13e1a60db177.png" rel="shortcut icon" type="image/x-icon">
    <title>지구샵</title>
</head>
<body>

    <div style="text-align: center; margin-top: 120px;">
        <span class = "product_add_title">정보수정</span><br>
        <span class = "product_add_desc">계정 주인 외에는 회원 정보를 수정할 수 없습니다.</span>
    </div>

    <?php

        $url = "localhost";
        $id = "rashop";
        $password="01l3KL2tHqiIx61T";
        $db = "rashop";

        $conn = mysqli_connect($url,$id,$password,$db);

        $sql="select * from user where id = '$idx'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        for($i=0;$i<$num;$i++) {

        $re=mysqli_fetch_array($result);


        ?>
        <center><table>
            <tr>
                <tr>
                    <td>
                        <input type="text" placeholder="이름" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;font-family: 'Nanum Gothic', sans-serif;
                        font-size: 12px;" id = "uname" name = "uname" value="<?php echo $re[1];?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder="아이디" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;     font-family: 'Nanum Gothic', sans-serif;
                        font-size: 12px;" id = "uid" name = "uid" value="<?php echo $re[2];?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="비밀번호" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;font-family: 'Nanum Gothic', sans-serif;
                        font-size: 12px;" id = "upw" name = "upw" value="<?php echo $re[3];?>">
                    </td>
                </tr>
            </tr>
        </table></center>
        <center>
        <button type="submit" style="background-color : #2DB400">수정하기</button>
        </center>
</body>
</html>