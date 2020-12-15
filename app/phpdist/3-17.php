<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="./assets/plugins/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    
    
</head>
<body>
<div class="wrapper isMailbox">
    <header class="mheader">
    <div class="left">
        <a href="">
            <span>한국장기조직기증원</span>
            <img src="./assets/images/email-logo.png" alt="">
        </a>
        <button onclick="$('#noticemodal').css('display', 'flex');">메일 작성시 유의사항</button>
    </div>

    <div class="right">
        <a href="">로그인</a>
        <a href="" class="issns">
            <img src="./assets/images/main-sns-insta.png" alt="">
        </a>
        <a href="" class="issns">
            <img src="./assets/images/main-sns-facebook.png" alt="">
        </a>
        <a href="" class="issns">
            <img src="./assets/images/main-sns-blog.png" alt="">
        </a>
        <a href="" class="issns">
            <img src="./assets/images/main-sns-youtube-white.png" alt="">
        </a>

        <button class="m-menu" onclick="$('.mobile-emenu').show();">
            메뉴
        </button>
    </div>
</header>

<div class="mobile-emenu" style="display: none">
    <div class="mobile-emenu-content">
        <button class="close" onclick="$('.mobile-emenu').hide();"></button>
        <div class="top">
            <div class="flex mb-4 items-center">
                <img src="./assets/images/i-user.png" alt="">
                <strong class="ml-2">홍길동</strong> 님
            </div>
            <div>
                <a href="">내 정보</a>
                <a href="">로그아웃</a>
            </div>
        </div>
        <div class="links">
            <a href="" class="active">
                받은편지함 <strong>2</strong>
            </a>
            <a href="">
                안읽은 편지함
            </a>
            <a href="">보낸편지함</a>
            <a href="">임시보관함</a>
        </div>
    </div>
</div>

<div class="modal" id="noticemodal">
    <div class="modal__content">
        <h2>메일 작성 시 유의사항</h2>
        <button class="close" onclick="$('#noticemodal').hide();"></button>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/MpFDwKI1FmE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

    <div class="container">
        
    <div class="esignup">
        <div class="wrap">
            <h2 class="e-title">회원탈퇴</h2>
            <div class="e-desciption">
                회원탈퇴를 원하실 경우, 본인확인을 위해 비밀번호를 한번 더 입력해 주세요.<br/>
                비밀번호를 입력하시면 회원탈퇴가 완료됩니다.
                <p style="color:#ff7e00">
                ※ 탈퇴 후 재가입은 30일 이후에 가능합니다.<br/>
                <span class="block pl-4">- 탈퇴 후에는 같은 아이디로 다시 가입할 수 없으며 아이디와 데이터는 복구할 수 없습니다.</span>
                <span class="block pl-4">- 게시판에 남아 있는 게시글은 탈퇴 후 삭제할 수 없습니다.</span>
                </p>
            </p>

            <div class="e-form mt-8">
                <div class="row">
                    <h3>생명나눔 우체통 아이디</h3>
                    <div>
                        <p>abcdefg</p>
                    </div>
                </div>
                <div class="row">
                    <h3>비밀번호</h3>
                    <div>
                        <input type="password" placeholder="비밀번호 입력" />
                    </div>
                </div>
            </div>

            <div class="actions mt-12">
                <a href="" class="green">회원탈퇴</a>
            </div>
        </div>
    </div>


    </div>
    
</div>
<div id="loader">
  <span class="loader-overlay">
    <span class="loader-inner"></span>
  </span>
</div>

<script src="./assets/plugins/jquery/jquery.js"></script>
<script src="./assets/plugins/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="./assets/plugins/slick/slick.js"></script>
<script src="./assets/js/ui.js"></script>


</body>
</html>
