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
            <h2 class="e-title">내 정보</h2>

            <div class="esignup-form-section">
                <h2>내 정보 관리</h2>
                <div class="table">
                    <table>
                        <colgroup>
                            <col class="form-col1">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>아이디</th>
                            <td>hongildong23</td>
                        </tr>
                        <tr>
                            <th>이름</th>
                            <td>홍길동</td>
                        </tr>
                        <tr>
                            <th>닉네임</th>
                            <td>
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                                <p style="color:#ff7e00;"> *개인정보 유출 가능성이 있는 닉네임은 사용 불가능합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>
                            <td>
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>비밀번호 확인</th>
                            <td>
                                <div class="row">
                                    <div class="input">
                                        <input type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>주소</th>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <th>휴대전화번호</th>
                            <td>
                                <div class="row">
                                    <p>010-2222-3333</p>
                                    <a href="" class="btn">휴대전화번호 변경</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>
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
                                <p style="color:#ff7e00;">※ 이메일 한가지는 필수입력</p>
                            </td>
                        </tr>
                        <tr>
                            <th>생년월일</th>
                            <td>
                                <div class="row">
                                    <p>1991-11-11</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>이메일 수신</th>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <th>SMS 수신</th>
                            <td>
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
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="esignup-form-section mt-12">
                <h2>보호자 동의</h2>
                <div class="table">
                    <table>
                        <colgroup>
                            <col class="form-col1">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>보호자 이름</th>
                            <td>홍길동</td>
                        </tr>
                        <tr>
                            <th>보호자 생년월일</th>
                            <td>
                                <div class="row">
                                    <p>1991-11-11</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>보호자 성별</th>
                            <td>
                                <div class="row">
                                    <p>남성</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>휴대전화번호</th>
                            <td>
                                <div class="row">
                                    <p>010-2222-3333</p>
                                    <a href="" class="btn">휴대전화번호 변경</a>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="esignup-form-section mt-12">
                <h2>수혜자 정보</h2>
                <div class="table table--rsv">
                    <table>
                        <colgroup>
                            <col class="form-col1">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>수혜자 이름</th>
                            <td>
                                <div class="row">
                                    <p>홍길동</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>수혜병원</th>
                            <td>
                                <div class="row">
                                    <p>보라매병원(서울시 동작구)</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>수혜장기</th>
                            <td>
                                <div class="row">
                                    <p>심장</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>생년월일</th>
                            <td>
                                <div class="row">
                                    <p>010-2222-3333</p>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>



            <div class="actions mt-12">
                <a href="" class="black">수정하기</a>
                <a href="">취소</a>
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
