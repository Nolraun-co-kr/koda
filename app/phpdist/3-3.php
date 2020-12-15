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
        <h2 class="e-title">회원가입</h2>
        <div class="esignup__process">
            <div class="col">
                <div class="icon">
                    <img src="./assets/images/eprocess-1-active.png" alt="">
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

        <div class="einfo">
            · 기증자 또는 수혜자 구분을 합니다.<br/>
            · 기증자 및 수혜자 정보는 KONOS(질병관리본부)의 정보를 이용하되 여부만 확인합니다<br/>
            · 어린이 회원은 부모닙(법적대리인)의 동의하에 부모님(법적대리인)이 본인인증을 하셔야만 본인인증 절차를 마무리 할 수 있습니다.<br/>
        </div>

        <div class="esignup-type">
            <div class="col">
                <div class="icon"><img src="./assets/images/esignup-type1.png" alt=""></div>
                <h2>기증자</h2>
                <h3>(가족 3인까지)</h3>
                <p>
                    기증자 회원은 기증자 가족 3인까지 가입이 가능합니다.
                </p>
                <a href="javascript:$('#esignup-1').css('display', 'flex')">기증자 가입하기</a>
            </div>
            <div class="col">
                <div class="icon"><img src="./assets/images/esignup-type2.png" alt=""></div>
                <h2>수혜자</h2>
                <h3>(본인)</h3>
                <p>
                    수혜자 회원은 본인만 가입이 가능합니다.
                </p>
                <a href="javascript:$('#esignup-2').css('display', 'flex')" class="rsv">수해자 가입하기</a>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--eisngup" style="display: none;" id="esignup-1">
    <div class="modal__content">
        <header>
            <img src="./assets/images/esignup-logo.png" alt="">
            <button class="close" onclick="$('.modal--eisngup').hide();"></button>
        </header>
        <div class="modal__body">
            <form action="">
                <div class="top">
                    <h2>기증자 정보</h2>
                    <p>
                        ※ 기증자 정보가 일치해야 회원으로 승인 됩니다.
                    </p>
                </div>

                <div class="form">
                    <table>
                        <colgroup>
                            <col class="w1">
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>
                                <strong>기증자명</strong>
                            </th>
                            <td colspan="3">
                                <div class="input"><input type="text"></div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>기증병원</strong></th>
                            <td colspan="3">
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">보라매병원(서울특별시 동작구 소재)</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>기증일</strong></th>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">년</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">월</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">일</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>생년월일</strong></th>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">년</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">월</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">일</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <button class="submit">확인</button>
            </form>
        </div>
    </div>
</div>
<div class="modal modal--eisngup" style="display: none;" id="esignup-2">
    <div class="modal__content">
        <header>
            <img src="./assets/images/esignup-logo.png" alt="">
            <button class="close" onclick="$('.modal--eisngup').hide();"></button>
        </header>
        <div class="modal__body">
            <form action="">
                <div class="top">
                    <h2>수혜자 정보</h2>
                    <p>
                        ※ 수혜자 정보가 일치해야 회원으로 승인 됩니다.
                    </p>
                </div>

                <div class="form">
                    <table>
                        <colgroup>
                            <col class="w1">
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>
                                <strong>수혜자명</strong>
                            </th>
                            <td colspan="3">
                                <div class="input"><input type="text"></div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>수혜병원</strong></th>
                            <td colspan="3">
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">보라매병원(서울특별시 동작구 소재)</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>수혜장기</strong></th>
                            <td colspan="3">
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">선택하세요.</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><strong>생년월일</strong></th>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">년</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">월</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="select">
                                    <select name="" id="">
                                        <option value="">일</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <button class="submit">확인</button>
            </form>
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
