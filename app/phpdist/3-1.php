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
        
<div class="login">
    <div class="content">
        <img src="./assets/images/login-bg-img.png" alt="">
        <div class="login__form">
            <h2>생명나눔우체통 로그인</h2>
            <div class="form">
                <div class="input">
                    <input type="text" placeholder="아이디">
                </div>
                <div class="input">
                    <input type="text" placeholder="비밀번호">
                </div>
                <button class="submit">로그인</button>
            </div>

            <div class="etc">
                <label for="saveId" class="checkbox">
                    <input type="checkbox" hidden id="saveId">
                    <span></span>
                    <p>아이디 저장</p>
                </label>

                <div class="links">
                    <a href="">아이디 찾기</a>
                    <a href="">비밀번호 찾기</a>
                    <a href="">회원가입</a>
                </div>
            </div>
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
