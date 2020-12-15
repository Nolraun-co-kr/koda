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
        <div class="sub information">
          <div class="sub__visual">
            <div class="sub__pagename">
              <div class="wrap">
                <h2>정보공개</h2>
                <p>기증/이식 현황 등을 한눈에 보실 수 있습니다.</p>
                <img class="img" src="./assets/images/sub-visual6.png" alt="" />
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
                <h2>교육자료</h2>
              </div>
              <div class="info__content educate-data flex">
                <div class="item flex-1 mr-8 item1">
                  <div class="img">
                    <img src="./assets/images/educate-1.png" alt="" />
                  </div>
                  <div class="txtBox text-center">
                    <div class="tit">의료진용 교육자료</div>
                    <div class="txt">
                      본 과정을 통해 장기기증의 필요성을 인식하고,<br />
                      뇌사에 대해 정확하게 이해할 수 있으며,<br />
                      뇌사 추정자 신고제와 Donation Improvement Program을<br />
                      올바로 알 수 있게 될 것입니다.
                    </div>
                  </div>
                  <a href="" class="links flex"> <i></i>동영상보기 </a>
                </div>
                <div class="item flex-1 item2">
                  <div class="img">
                    <img src="./assets/images/educate-2.png" alt="" />
                  </div>
                  <div class="txtBox text-center">
                    <div class="tit">일반인용 교육자료</div>
                    <div class="txt">
                      본 과정을 통해 장기기증을 올바로 알 수 있으며,<br />
                      뇌사에 대한 정확한 정보와 장기기증 절차 및<br />
                      기증자와 기증자 가족관리에 대해 알 수 있습니다.
                    </div>
                  </div>
                  <a href="" class="links flex"> <i></i>동영상보기 </a>
                </div>
              </div>
              <p class="ie mt-8">
                ※ 해당 동영상은 IE 8~10 브라우저에 최적화 되어있습니다.
              </p>
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
