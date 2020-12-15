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
                <h2>이식 현황</h2>
              </div>
              <div class="info__content">
                <div class="subTit flex justify-between">
                  <h3 class="flex items-center">뇌사기증자 장기이식현황</h3>
                  <div class="button">
                    <a href="" class="download flex">
                      <i></i>
                      장기이식통계자료 다운로드
                    </a>
                  </div>
                </div>
                <div class="scrollbox2">
                  <div class="table infoTable border-orange thin">
                    <table>
                      <colgroup>
                        <col width="200px" class="m-width-100" />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col />
                      </colgroup>
                      <thead>
                        <tr>
                          <th rowspan="2">연도</th>
                          <th rowspan="2">뇌사자(명)</th>
                          <th colspan="8">이식건수</th>
                          <th class="orange" rowspan="2">Total</th>
                        </tr>
                        <tr>
                          <th>신장</th>
                          <th>간</th>
                          <th>췌장</th>
                          <th>심장</th>
                          <th>폐</th>
                          <th>췌도</th>
                          <th>소장</th>
                          <th>각막</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-bold">2019</td>
                          <td class="font-bold">450</td>
                          <td class="font-bold">794</td>
                          <td class="font-bold">391</td>
                          <td class="font-bold">75</td>
                          <td class="font-bold">194</td>
                          <td class="font-bold">157</td>
                          <td class="font-bold">1</td>
                          <td class="font-bold">0</td>
                          <td class="font-bold">192</td>
                          <td class="font-bold bg-orange orange">1,804</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>

                        <tr>
                          <td>2018</td>
                          <td>449</td>
                          <td>111</td>
                          <td>222</td>
                          <td>222</td>
                          <td>33</td>
                          <td>44</td>
                          <td>555</td>
                          <td>66</td>
                          <td>11</td>
                          <td class="bg-orange orange">44</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Total</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                          <td>5,586</td>
                        </tr>
                      </tfoot>
                    </table>
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
