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
                <h2>소통게시판</h2>
              </div>
              <div class="memorial__detail-content">
                <header>
                  <h3 class="title">
                    자기의사결정 존중에 대해 어떻게 생각하시나요?
                  </h3>
                  <div class="info">
                    <div class="col">등록일 <strong>2020-10-19</strong></div>
                    <div class="col">
                      응답기간 <strong>2020.01.09 - 2020.01.09</strong>
                    </div>
                    <div class="col">조회 <strong>104</strong></div>
                  </div>
                </header>

                <div class="memorial__detail-body border-type">
                  <!-- content 입력 -->
                  <div class="content surveyBox" style="">
                    <div class="title">
                      <p>자기의사결정 존중에 대해 어떻게 생각하시나요?</p>
                    </div>
                    <div class="radioBox">
                      <div class="item">
                        <label for="area1" class="radio my-2 mr-6">
                          <input
                            type="radio"
                            name="area"
                            id="area1"
                            hidden=""
                          />
                          <span></span>
                          <p>존중한다.</p>
                        </label>
                      </div>
                      <div class="item">
                        <label for="area2" class="radio my-2 mr-6">
                          <input
                            type="radio"
                            name="area"
                            id="area2"
                            hidden=""
                          />
                          <span></span>
                          <p>모르겠다.</p>
                        </label>
                      </div>
                      <div class="item">
                        <label for="area3" class="radio my-2 mr-6">
                          <input
                            type="radio"
                            name="area"
                            id="area3"
                            hidden=""
                          />
                          <span></span>
                          <p>존중하지 않는다.</p>
                        </label>
                      </div>
                    </div>
                    <div class="form-actions">
                      <button class="btn submit">제출하기</button>
                      <a href="#//" class="btn">결과보기</a>
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

        <div class="popup-wrap">
          <div class="popup__bg"></div>
          <div class="popup">
            <div class="popup__tit">이메일/비밀번호 입력</div>
            <div class="popup__form">
              <div class="row flex">
                <div class="tit">이메일</div>
                <div class="input">
                  <input type="text" />
                </div>
              </div>
              <div class="row flex">
                <div class="tit">비밀번호</div>
                <div class="input">
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="form-actions justify-center">
              <button class="btn submit">확인</button>
              <a href="#//" class="btn" onclick="$('.popup-wrap').hide();"
                >닫기</a
              >
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
