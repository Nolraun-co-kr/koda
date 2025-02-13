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
        
<div class="emailcontainer">
    <div class="email__lnb">
        <div class="top">편지쓰기</div>
        <a href="" class="active">
            받은편지함 <strong>2</strong>
        </a>
        <a href="">
            안읽은 편지함
        </a>
        <a href="">보낸편지함</a>
        <a href="">임시보관함</a>
    </div>
    <div class="email__content">
        <div class="top">
            <div>
                <strong>받은편지함</strong> <strong class="ml-4"><span style="color:#1fb1a8;">2</span> / 100</strong>
            </div>
            <div class="search">
                <input type="text" placeholder="메일 검색">
                <button><img src="./assets/images/search-icon.png" alt=""></button>
            </div>
        </div>

        <div class="emaillist">
            <div class="emaillist__header">
                <div class="col col1">
                    <label for="allck" class="checkbox">
                        <input type="checkbox" hidden id="allck">
                        <span></span>
                    </label>
                </div>
                <div class="col col2">읽음</div>
                <div class="col col3"></div>
                <div class="col col4">닉네임</div>
                <div class="col col5">제목</div>
                <div class="col col6">보낸날짜</div>
                <div class="col col7">신고</div>
            </div>
            <div class="emaillist__body">
                <div class="row notread">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/not-readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <p class="text-red-500">현재 신고 처리중입니다.</p>
                    </div>
                </div>
                <div class="row notread">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/not-readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col col1">
                        <label for="ck1" class="checkbox">
                            <input type="checkbox" hidden id="ck1">
                            <span></span>
                        </label>
                    </div>
                    <div class="col col2">
                        <img src="./assets/images/readed.png" alt="" class="inline">
                    </div>
                    <div class="col col3">
                        <img src="./assets/images/have-item.png" alt="" class="inline">
                    </div>
                    <div class="col col4 text-center">홍길동</div>
                    <div class="col col5">
                        <a href="">안녕하세요. 생명나눔 우체통을 통해 처음 인사드립니다.</a>
                    </div>
                    <div class="col col6 text-center">20-10-27   13:30</div>
                    <div class="col col7 text-center">
                        <a href="javascript:$('#declaration').css('display', 'flex');">신고하기</a>
                    </div>
                </div>
                
            </div>
            <div class="pagination">
    <a href="" class="pagination__arrow prev-full"></a>
    <a href="" class="pagination__arrow prev"></a>
    <div class="pagination__number">
        <a href="" class="active">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
    </div>
    <a href="" class="pagination__arrow next"></a>
    <a href="" class="pagination__arrow next-full"></a>
</div>

        </div>
    </div>
</div>

<div class="modal" id="declaration" style="display: none;">
    <div class="modal__content">
        <header class="header">
            <h2>신고하기</h2>

            <button class="close" onclick="$('#declaration').hide();"></button>
        </header>
        <div class="body">
            <div class="table">
                <table>
                    <colgroup>
                        <col class="dcol1">
                        <col>
                    </colgroup>
                    <tbody>
                    <tr>
                        <th>보낸사람</th>
                        <td>개나리</td>
                    </tr>
                    <tr>
                        <th>보낸날짜</th>
                        <td>20-10-27 13:30</td>
                    </tr>
                    <tr>
                        <th>제목</th>
                        <td>
                            안녕하세요. 생명나눔 우체통을 통해 인사드립니다.
                        </td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td>
                            안녕하세요. 생명나눔 우체통을 통해 인사드립니다.
                            감사합니다.
                        </td>
                    </tr>
                    <tr>
                        <th>신고내용</th>
                        <td>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>첨부파일</th>
                        <td>
                            <input type="file">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="submit">신고하기</button>
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
