var bigPic = document.querySelector("#big");        // 큰사진
var smallPics = document.querySelectorAll(".small");   // 작은 사진(여러개)

for(var i = 0; i < smallPics.length; i++){
smallPics[i].addEventListener("click", changepic);  // 이벤트 처리
/*
onclick으로 하면 하나의 요소에 하나의 이벤트만 사용가능
smallPics[i].onclick = changepic;
*/
}

function changepic(){       // 사진 바꾸는 함수
let smallPicAttribute = this.getAttribute("src");
bigPic.setAttribute("src", smallPicAttribute);
}