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
        <div class="sub sub1">
          <div class="sub__visual">
            <div class="sub__pagename">
              <div class="wrap">
                <h2>장기·조직 기증</h2>
                <p>누군가의 끝이 아니라 누군가의 시작</p>
                <img class="img" src="./assets/images/sub-visual1.png" alt="" />
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
                <h2>기증용어설명</h2>
                <p>기증 관련 용어를 정리해 놓은 곳입니다.</p>
              </div>

              <div class="sub__tabs">
                <a href="" class="active">권역 구분</a>
                <a href="">병원 구분</a>
                <a href="">기증자 구분</a>
                <a href="" style="width: 35%; flex: none">
                  장기·조직기증 활성화프로그램<br />
                </a>
                <a href="">기타</a>

                <div class="select">
                  <button>조직기증 동의 시</button>
                  <div class="dropdown">
                    <a href="">권역 구분</a>
                    <a href="">병원 구분</a>
                    <a href="">기증자 구분</a>
                    <a href="">장기·조직기증 활성화프로그램</a>
                    <a href="">기타</a>
                  </div>
                </div>
              </div>

              <div class="content">
                <div class="mapcol">
                  <div class="col">
                    <img src="./assets/images/mapcol-map.png" alt="" />
                  </div>
                  <div class="col">
                    <ul>
                      <li>
                        <img src="./assets/images/mapcol-col1.png" alt="" />
                        중부관리지부 (Central Region)
                      </li>
                      <li>
                        <img src="./assets/images/mapcol-col2.png" alt="" />
                        충정·호남관리지부 (South West Region)
                      </li>
                      <li>
                        <img src="./assets/images/mapcol-col3.png" alt="" />
                        영남관리지부 (South East Region)
                      </li>
                    </ul>
                  </div>
                </div>
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
