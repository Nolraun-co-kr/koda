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
            <h2 class="e-title">기증자 가족 회원가입</h2>
            <div class="esignup__process">
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-1.png" alt="">
                    </div>
                    <p>회원구분</p>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-2.png" alt="">
                    </div>
                    <p>회원선택</p>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-3-active.png" alt="">
                    </div>
                    <p>약관동의</p>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-4.png" alt="">
                    </div>
                    <p>본인인증</p>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-5.png" alt="">
                    </div>
                    <p>정보입력</p>
                </div>
                <div class="col">
                    <div class="icon">
                        <img src="./assets/images/eprocess-6.png" alt="">
                    </div>
                    <p>가입완료</p>
                </div>
            </div>

            <div class="esignup__privacy">

                <div class="allCheck">
                    <label for="ckall" class="checkbox">
                        <p>한국장기조직기증원의 모든 약관에 동의합니다. </p>
                        <input type="checkbox" hidden id="ckall">
                        <span></span>
                    </label>
                </div>

                <div class="section">
                    <h3>이용약관</h3>
                    <div class="prvbox">제 1 장 총칙

                        제 1 조 (개인정보의 수집 및 이용목적)
                        한국장기기증조직원 홈페이지는 회원님 개인의 정보를 수집목적은 건전하고 최적의 서비스를 제공해드리기 위한 것이며, 이용목적은 공단 홈페이지 개선방향 모색과 비밀번호 분실시
                        조치 등에 이용됩니다.

                        제 2 조 (수집하는 개인정보 항목, 수집 방법 및 보유기간)
                        공공기관의 개인정보파일 관리지침을 준수하여 개인정보를 보유하고 있습니다.
                        한국장기기증조직원 홈페이지는 최초 회원가입을 하실 때 서비스 제공을 위해 가장 필수적인 개인정보를 받고 있습니다. 회원가입 시에 받는 정보는 회원님의 이름, 아이디와 패스워드,
                        생년월일, 주소, 연락처 기타 회원님의 권익 증진을 위해 공단에서 제공할 필요가 있다고 판단되는 정보를 서비스하기 위한 필요한 항목입니다. 또한, 보유기간은 가입일로 부터 2년간 개
                        인정보를 보유하고, 회원가입 탈퇴 시, 회원님의 개인정보는 바로 삭제조치함을 알려드립니다. 기입하신 정보는 서비스 제공이나 회원님께 사전에 밝힌 목적 이외의 다른 어떠한 목적으
                    </div>
                    <div class="ck">
                        <label for="ck1" class="checkbox">
                            <p>위 내용을 읽었으며, "회원약관"에 동의합니다. </p>
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="section">
                    <h3>개인정보 수집·이용 동의</h3>
                    <div class="prvbox">제 1 장 총칙

                        제 1 조 (개인정보의 수집 및 이용목적)
                        한국장기기증조직원 홈페이지는 회원님 개인의 정보를 수집목적은 건전하고 최적의 서비스를 제공해드리기 위한 것이며, 이용목적은 공단 홈페이지 개선방향 모색과 비밀번호 분실시
                        조치 등에 이용됩니다.

                        제 2 조 (수집하는 개인정보 항목, 수집 방법 및 보유기간)
                        공공기관의 개인정보파일 관리지침을 준수하여 개인정보를 보유하고 있습니다.
                        한국장기기증조직원 홈페이지는 최초 회원가입을 하실 때 서비스 제공을 위해 가장 필수적인 개인정보를 받고 있습니다. 회원가입 시에 받는 정보는 회원님의 이름, 아이디와 패스워드,
                        생년월일, 주소, 연락처 기타 회원님의 권익 증진을 위해 공단에서 제공할 필요가 있다고 판단되는 정보를 서비스하기 위한 필요한 항목입니다. 또한, 보유기간은 가입일로 부터 2년간 개
                        인정보를 보유하고, 회원가입 탈퇴 시, 회원님의 개인정보는 바로 삭제조치함을 알려드립니다. 기입하신 정보는 서비스 제공이나 회원님께 사전에 밝힌 목적 이외의 다른 어떠한 목적으
                    </div>
                    <div class="ck">
                        <label for="ck2" class="checkbox">
                            <p>위 내용을 읽었으며, "개인정보 수집·이용 약관"에 동의합니다. </p>
                            <input type="checkbox" hidden id="ck2">
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="actions">
                    <a href="" class="black">회원가입</a>
                    <a href="">취소</a>
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
