<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/plugins/slick/slick.css" />
    <link
      rel="stylesheet"
      href="./assets/plugins/jquery-ui-1.12.1/jquery-ui.css"
    />
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>
  <body>
    <div class="wrapper">
      <?php
      include_once './include/header.php';
?>

      <div class="container">
        <div class="sub memorial">
          <div class="sub__visual">
            <div class="sub__pagename">
              <div class="wrap">
                <h2>기증자 예우</h2>
                <p>
                  누군가에게 새로운 생명을 선물한 당신, 잊지않고 기억하겠습니다.
                </p>
                <img class="img" src="./assets/images/sub-visual2.png" alt="" />
              </div>
            </div>
            <div class="sub__navigation">
              <div class="wrap flex">
                <a href="/" class="home">홈</a>
                <div class="select">
                  <button>장기·조직 기증</button>
                  <div class="dropdown">
                    <a href="">서브1</a>
                    <a href="">서브2</a>
                    <a href="">서브3</a>
                  </div>
                </div>

                <div class="select">
                  <button>장기·조직 기증</button>
                  <div class="dropdown">
                    <a href="">서브1</a>
                    <a href="">서브2</a>
                    <a href="">서브3</a>
                  </div>
                </div>

                <a href="" class="link">기증희망등록 신청</a>
              </div>
            </div>
          </div>
          <div class="sub__content">
            <div class="sub__lnb">
              <div class="row">
                <a href="" class="link active">기증희망등록</a>
                <div class="depth">
                  <a href="" class="depth-link active">기증희망등록이란?</a>
                  <a href="" class="depth-link">기증희망등록 신청</a>
                </div>
              </div>
              <div class="row">
                <a href="" class="link">기증희망등록</a>
                <div class="depth">
                  <a href="" class="depth-link">기증희망등록이란?</a>
                  <a href="" class="depth-link">기증희망등록 신청</a>
                </div>
              </div>
              <div class="row">
                <a href="" class="link">기증희망등록</a>
                <div class="depth">
                  <a href="" class="depth-link">기증희망등록이란?</a>
                  <a href="" class="depth-link">기증희망등록 신청</a>
                </div>
              </div>
            </div>

            <div class="wrap">
              <div class="sub__header">
                <h2>기증자 추모관</h2>
              </div>
              <div class="sub__tabs">
                <a href="" class="active">기증자 추모관</a>
                <a href="" class="">하늘나라 편지</a>
                <a href="" class="">수혜자 편지</a>
                <a href="" class="">기증 후 스토리</a>

                <div class="select">
                  <button>기증자 추모관</button>
                  <div class="dropdown">
                    <a href="" class="">기증자 추모관</a>
                    <a href="" class="">하늘나라 편지</a>
                    <a href="" class="">수혜자 편지</a>
                    <a href="" class="">기증 후 스토리</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="memorial__banner">
              <div class="wrap">
                <img
                  src="./assets/images/memorial-img.png"
                  alt=""
                  class="action-img"
                />
                <div class="memorial__banner-text">
                  <img src="./assets/images/memorial-title.png" alt="" />
                </div>
                <button onclick="$('.action-img').addClass('active');">
                  헌화하기
                </button>
              </div>
            </div>

            <div class="wrap">
              <div class="memorial__info">
                <header class="flex">
                  <div class="flex-1 memorial__info-text">
                    <span>기증자</span> 서정민
                  </div>
                  <div class="flex-1 memorial__info-text">
                    <span>기증일</span> 2020-09-29
                  </div>
                </header>
                <div class="memorial__info-box">
                  <strong>
                    기증자 서 정 민(M, 1)님은 2020년 09월 26일 환자들에게 귀중한
                    장기를 선물해주셨습니다.
                  </strong>
                  <br />
                  한국장기조직기증원은 귀한 생명을 나눠주신 기증자와 유가족께
                  깊이 감사드리며,<br />
                  앞으로도 기증자 유가족들이 건강한 삶을 유지할 수 있도록 최선을
                  다해 지원할 것입니다.<br />
                  <br />
                  고인의 명복을 빕니다.
                </div>
              </div>
              <div class="memorial__info-foot">
                <a href="" class="f1">하늘나라 편지쓰기</a>
                <a href="" class="f2">목록보기</a>
              </div>

              <div class="memorial__comment">
                <div class="memorial__comment-top">
                  <button class="type1">
                    <img src="./assets/images/memorial-i3.png" alt="" /> 헌화
                    <span>21</span>
                  </button>
                  <button class="type2">
                    <img src="./assets/images/memorial-i4.png" alt="" />
                    사랑해요 <span>21</span>
                  </button>
                  <button class="type3">
                    <img src="./assets/images/memorial-i5.png" alt="" />
                    보고싶어요 <span>21</span>
                  </button>
                  <button class="type4">
                    <img src="./assets/images/memorial-i6.png" alt="" />
                    그리워요 <span>21</span>
                  </button>
                  <button class="type5">
                    <img src="./assets/images/memorial-i7.png" alt="" />
                    자랑스러워요 <span>21</span>
                  </button>
                  <button class="type6">
                    <img src="./assets/images/memorial-i8.png" alt="" />
                    힘들어요 <span>21</span>
                  </button>
                  <button class="type7">
                    <img src="./assets/images/memorial-i9.png" alt="" /> 슬퍼요
                    <span>21</span>
                  </button>
                </div>
                <div class="memorial__comment-form">
                  <div class="textarea">
                    <textarea
                      name=""
                      id=""
                      placeholder="기증자에 대한 추모 분위기를 해치거나, 비방의 글 등이 게시가 될 경우 관리자에 의해 삭제 될 수 있습니다. "
                    ></textarea>
                  </div>
                  <button>댓글등록</button>
                </div>
                <div class="memorial__comment-title">
                  <span class="date">2020-10-12</span>
                  <p>
                    세상에서 가장 아름다운 아기, 진정한 사랑을 실천하고 간
                    정민아♥ 영원히 너를 기억할께!<br />
                    더이상 아픔과 슬픔과 눈물이 없는 그곳에서 평안하길 바라며
                    훗날 다시 만나자
                  </p>
                </div>
              </div>

              <div class="memorial__comment-list">
                <header>
                  <h2>하늘나라 편지 <span>24</span></h2>
                </header>
                <div class="list">
                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>

                  <a href="" class="row">
                    <p>정민아 ~~ <span>2</span></p>
                    <span class="date">2020-10-19</span>
                  </a>
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
      </div>
      <?php
      include_once './include/footer.php';
?>
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
