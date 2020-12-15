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

            <div class="emaildetail">
                <div class="emaildetail__header">
                    <h2>안녕하세요. 생명나눔 우체통을 통해 처음 인사 드립니다.</h2>
                    <div class="info">
                        <span class="tit">보낸사람</span> 개나리 <span class="info__date">20-10-20 13:12</span>
                    </div>

                    <a href="">답장하기</a>
                </div>
                <div class="emaildetail__body">
                    <div class="files">
                        <a href="" class="file">
                            첨부파일 <strong>홍길동 기증자 가족님들께.jpg</strong> <span>12KB</span>
                        </a>
                        <a href="" class="file">
                            첨부파일 <strong>홍길동 기증자 가족님들께.jpg</strong> <span>12KB</span>
                        </a>
                    </div>
                    <div class="edit">심장 이식이 결정되고 진행되는 동안 저는 의식이 없었어요.
                        수술이 성공적으로 끝나고, 회복실에서 눈을 뜬 후에야, 내가 다른 분의 심장을 받았다는 것을 알게 되었습니다.

                        ‘우리 딸, 심장 이식 수술 잘 됐대.’

                        이렇게 설명해주실 때도, 실감이 잘 안 났던 것 같아요.
                        아픈 내 심장에게 남은 아주 조금의 시간 안에, 아주 운이 좋게도 심장 이식을 할 수 있었다고 했습니다.
                        운이 좋다는 것은 아마도 장기 이식이 필요한 대기자에 비해 뇌사 장기 기증이 적게 이루어지고 있는 상황,
                        그리고 거의 다 죽어가는 내 심장의 상황 같은 것을 고려해서 나온 말일 겁니다.
                        이식 대기 중에 사망하는 사람들이 매일 평균 6명은 나온다고 하니까, 그런 면에서 제가 운이 좋다고 할 수 있을 겁니다.

                        하지만, 이런 생각이 들더라고요.
                        제가 운에 대해서 함부로 말해도 되는걸까요?
                        그 운 좋은 심장 이식이 의미하는 것은,
                        이 심장의 원래 주인이 더 이상 그 심장을 가지고 있지 않다는 말이잖아요?
                        건강하게 뛰는 심장을 나에게 주고 세상을 떠났다는 말이잖아요?
                        그 분의 가족들은, 사랑하는 사람을 잃었다는 말이잖아요?

                        위의 외침들을 소화하기까지 오래 걸린 것 같습니다. 깊이 생각하고 싶지 않았거든요.
                        기증자와 가족들을 생각하면 마음이 아팠어요.

                        ‘내가 감히 이런 것을 받을 자격이 되는건가?’
                        ‘내가 이런 상황에서 기뻐해도 되는걸까?’

                        이런 생각도 들었습니다.

                        그 질문들을 제대로 마주했던 건,
                        의사 선생님이, “수진씨, 이제 퇴원해도 됩니다. 다시 일상으로 복귀하셔도 좋아요.”라고 말씀하셨을 때입니다.
                        다른 이를 위해 나의 신체를 내어주신 그 큰 뜻을, 그 큰 사건을 없던 일처럼 여기면서 일상으로 돌아가면 안 될 것 같다는 생각은 분명히 들었어요.
                        내가 그 큰 도움을 받을 자격이 있었는지는 모르겠지만, 적어도 앞으로 세상에 도움을 줄 수 있도록 최선을 다해 열심히 살 수 밖에 없겠다는 생각을 했습니다.
                        여전히 저에게는 어려운 주제이지만, 다른 것은 몰라도, 기증자와 기증자의 가족들에게 이 장기 기증이 정말 의미있었노라고 증명할 수 있는 그런 행동들을 해야겠다는 생각을 했습니다.

                        이제 제 삶은, 온전히 저만의 것은 아니라는 생각이 들어요.
                        세상의 많은 도움의 손길들, 선한 의지들이 모여서 만들어진 두번째 삶인 것을, 이제는 압니다.
                        당신의 그 행동이 세상에 또 다른 긍정적인 영향으로 퍼질 수 있도록, 저는 꼭 열심히 살거에요.

                        감히 상상하지 못할 어려움 속에서 내린 그 큰 결단에 정말 머리 숙여 존경을 표하고 싶습니다.

                        이 심장, 여전히 잘 뛰고 있습니다.
                        앞으로도 의미있게 뛰게 하겠습니다.

                        감사합니다.
                    </div>
                </div>
                <div class="emaildetail__footer">
                    <div class="emaillist">
                        <div class="emaillist__body">
                            <div class="row">
                                <div class="col col1" style="font-size: 10px;">▲</div>
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
                            </div>
                            <div class="row">
                                <div class="col col1" style="font-size: 10px;">▼</div>
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
                            </div>
                        </div>
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
