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
        <div class="sub promote">
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
                <h2>기증자 추모 · 유가족 행사</h2>
              </div>
              <div class="promote__select flex ml-auto">
                <select name="" id="">
                  <option value="">웹콘텐츠</option>
                  <option value="">생명나눔 스토리</option>
                </select>
              </div>
              <div class="memorial__detail-content file-type">
                <header>
                  <h3 class="title">
                    닥터프렌즈와 함께하는 생생한 생명나눔 Story
                  </h3>
                  <div class="info">
                    <div class="col">
                      <strong>웹콘텐츠</strong>
                    </div>
                    <div class="col">등록일 <strong>2020-10-19</strong></div>
                    <div class="col">조회수 <strong>104</strong></div>
                  </div>
                  <div class="attachFile flex items-center">
                    <span class="inline-block">첨부파일</span>
                    <a href="">의료진 대상 포스터.jpg</a>
                  </div>
                </header>

                <div class="memorial__detail-body">
                  <!-- content 입력 -->
                  <div class="content flex items-center flex-col">
                    <img src="./assets/images/promote-webcontents.png" alt="" />
                  </div>

                  <div class="content-next-prev">
                    <div class="col prev">
                      <a href="">
                        <span>이전글</span>
                        <p>해피너스 7기(한국장기조직기증원 간호대 봉사단)</p>
                      </a>
                    </div>
                    <div class="col next">
                      <a href="">
                        <span>다음글</span>
                        <p>다음 글이 없습니다.</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions justify-center">
                <a href="" class="submit btn">목록보기</a>
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
