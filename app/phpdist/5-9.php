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
                <h2>홍보·자료</h2>
                <p>한국장기조직기증원의 다양한 소식 및 자료</p>
                <img class="img" src="./assets/images/sub-visual5.png" alt="" />
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
                <h2>기관소식</h2>
              </div>
              <div class="memorial__search-form mb-8">
                <div class="select" style="margin: 0; margin-right: 10px">
                  <select name="" id="">
                    <option value="">전체분류</option>
                    <option value="">공지사항</option>
                    <option value="">채용</option>
                    <option value="">입찰</option>
                    <option value="">홍보</option>
                  </select>
                </div>
                <div class="select" style="margin: 0; margin-right: 10px">
                  <select name="" id="">
                    <option value="">전체</option>
                  </select>
                </div>
                <div class="input name mobile-mt-10">
                  <input type="text" placeholder="" />
                </div>
                <button class="submit">검색하기</button>
              </div>
              <div class="memorial__detail-content">
                <div class="calendar"></div>
                <div class="pomote__news-list">
                  <div class="item">
                    <a href="" class="flex">
                      <div class="img">
                        <img src="./assets/images/news-img.png" alt="" />
                      </div>
                      <div class="txtBox">
                        <div class="tit">
                          <h3>
                            세상이 초록빛 희망으로 물들다, 생명나눔 그린라이트
                            캠페인
                          </h3>
                        </div>
                        <div class="txt">
                          <p>
                            1. 세상이 초록빛 희망으로 물듭니다. 생명나눔
                            그린라이트 캠페인 2020. 10. 12.(월)~10.18.(일) 일몰
                            시 부터 2. 초록 색이 장기기증을 상징한다는 사실!
                            알고 계셨나요? 유방암=핑크, 자폐=블루 이처럼 WHO에서
                            지정한 색상이 있는데 요!
                            장기기증=그린(초록)이랍니...
                          </p>
                        </div>
                        <div class="date">2020-10-06</div>
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="" class="flex">
                      <div class="img">
                        <img src="./assets/images/news-img.png" alt="" />
                      </div>
                      <div class="txtBox">
                        <div class="tit">
                          <h3>
                            세상이 초록빛 희망으로 물들다, 생명나눔 그린라이트
                            캠페인
                          </h3>
                        </div>
                        <div class="date">2020-10-06</div>
                      </div>
                    </a>
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
