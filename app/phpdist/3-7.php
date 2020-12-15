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
                        <img src="./assets/images/eprocess-3.png" alt="">
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
                        <img src="./assets/images/eprocess-5-active.png" alt="">
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

            <div class="esignup-form">

                <div class="esignup-form-section">
                    <div class="form">
                        <div class="form-row">
                            <h3 class="require">아이디</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                    <button>아이디 중복확인</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">이름</h3>
                            <div class="box">
                                <div class="row">
                                    <p>홍길동</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">아이디</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="select" style="max-width:280px;">
                                        <select name="" id="">
                                            <option value="">가족</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">닉네임</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input"><input type="text" placeholder="개인정보 유출 가능성이 있는 닉네임은 사용 불가능합니다."></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">비밀번호</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">비밀번호 확인</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">주소</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                    <button>우편번호 검색</button>
                                </div>
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                </div>
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">휴대폰전화번호</h3>
                            <div class="box">
                                <div class="row">
                                    <p>010-2222-3333</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">이메일</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                    <span class="mx-4">@</span>
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="">직접입력</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                    <span class="mx-4">@</span>
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="">직접입력</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <p>※ 이메일 한가지는 필수입력</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">생년월일</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="">년 선택</option>
                                        </select>
                                    </div>
                                    <div class="select ml-4">
                                        <select name="" id="">
                                            <option value="">월 선택</option>
                                        </select>
                                    </div>
                                    <div class="select ml-4">
                                        <select name="" id="">
                                            <option value="">일 선택</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="">이메일 수신</h3>
                            <div class="box">
                                <div class="row">
                                    <label for="area1" class="radio mr-6">
                                        <input type="radio" name="area" id="area1" hidden checked>
                                        <span></span>
                                        <p>동의</p>
                                    </label>
                                    <label for="area2" class="radio">
                                        <input type="radio" name="area" id="area2" hidden>
                                        <span></span>
                                        <p>거부</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="">SMS 수신</h3>
                            <div class="box">
                                <div class="row">
                                    <label for="area3" class="radio mr-6">
                                        <input type="radio" name="are2" id="area3" hidden checked>
                                        <span></span>
                                        <p>동의</p>
                                    </label>
                                    <label for="area4" class="radio">
                                        <input type="radio" name="are2" id="area4" hidden>
                                        <span></span>
                                        <p>거부</p>
                                    </label>
                                </div>
                                <div class="row">
                                    <p>※ 이메일/SMS 수신을 거부 할 경우 사용에 제한이 발생할 수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="">뉴스레터 수신</h3>
                            <div class="box">
                                <div class="row">
                                    <label for="nl1" class="radio mr-6">
                                        <input type="radio" name="nl" id="nl1" hidden checked>
                                        <span></span>
                                        <p>동의</p>
                                    </label>
                                    <label for="nl2" class="radio">
                                        <input type="radio" name="nl" id="nl2" hidden>
                                        <span></span>
                                        <p>거부</p>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="input"><input type="text" placeholder=""></div>
                                    <span class="mx-4">@</span>
                                    <div class="select">
                                        <select name="" id="">
                                            <option value="">직접입력</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="esignup-form-section mt-12">
                    <h2>* 만 14세 미만의 어린이는 보호자 동의가 필요합니다.</h2>
                    <div class="form">
                        <div class="form-row">
                            <h3 class="require">보호자 이름</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <h3 class="require">보호자 생년월일</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <h3 class="">이메일 수신</h3>
                            <div class="box">
                                <div class="row">
                                    <label for="area1" class="radio mr-6">
                                        <input type="radio" name="area" id="area1" hidden checked>
                                        <span></span>
                                        <p>남성</p>
                                    </label>
                                    <label for="area2" class="radio">
                                        <input type="radio" name="area" id="area2" hidden>
                                        <span></span>
                                        <p>여성</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <h3 class="require">휴대전화번호</h3>
                            <div class="box">
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="actions mt-12">
                    <a href="" class="black">가입완료</a>
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
