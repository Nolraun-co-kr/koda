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
                <h2>언론보도</h2>
                <div class="top-txtBox flex items-center">
                  <div class="img">
                    <img src="./assets/images/news-top-img.png" alt="" />
                  </div>
                  <div class="txt">
                    <p>
                      한국장기조직기증원에서 언론에 소개할 자료를 배포하는
                      공간입니다.<br />
                      KODA에서 작성한 언론 보도자료는 각 언론사를 통해
                      소개됩니다.
                    </p>
                  </div>
                </div>
              </div>
              <div class="memorial__search-form mb-8">
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
                <div class="table promote__table">
                  <table>
                    <colgroup>
                      <col class="col1" />
                      <col class="col2" />
                      <col class="col3" />
                      <col class="col4" />
                    </colgroup>
                    <thead>
                      <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>등록일</th>
                        <th>조회수</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>51</td>
                        <td>
                          <a href="" class="">
                            초록빛 희망을 전하는 생명나눔 그린라이트 캠페인 전국
                            지자체와 장기 및 인체조직 기증 홍보 협약 초록빛
                            희망을 전하는 생명나눔 그린라이트 캠페인 전국
                            지자체와 장기 및 인체조직 기증 홍보 협약 초록빛
                            희망을 전하는 생명나눔 그린라이트 캠페인 전국
                            지자체와 장기 및 인체조직 기증 홍보 협약
                          </a>
                        </td>
                        <td>2020-10-06</td>
                        <td>24</td>
                      </tr>
                    </tbody>
                  </table>
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
