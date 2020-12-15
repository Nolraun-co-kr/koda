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
                      <p class="flex items-baseline"><span>3명</span>응답</p>
                      <p>자기의사결정 존중에 대해 어떻게 생각하시나요?</p>
                    </div>
                    <div class="surveyResult">
                      <div class="graph" style="max-width: 500px">
                        <canvas id="pieChart" width="400" height=""></canvas>
                      </div>
                      <div class="table">
                        <table>
                          <colgroup>
                            <col />
                            <col width="100px" />
                          </colgroup>
                          <thead>
                            <tr>
                              <th class="i">응답</th>
                              <th class="">응답수</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="i">존중한다</td>
                              <td>1</td>
                            </tr>
                            <tr>
                              <td class="i">모르겠다</td>
                              <td>1</td>
                            </tr>
                            <tr>
                              <td class="i">존중하지 않는다.</td>
                              <td>1</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
      var pieChart = document.getElementById('pieChart').getContext('2d');
      var barChartData = {
        labels: ['존중한다.', '모르겠다.', '존중하지 않는다.'],
        datasets: [
          {
            backgroundColor: ['#F55C81', '#38A4E4', '#FAC823'],
            data: [1, 1, 1],
          },
        ],
      };
      var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: barChartData,
        options: {
          showAllTooltips: true,
          responsive: true,
          legend: {
            position: 'right',
          },
        },
      });
    </script>
  </body>
</html>
