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
                <h2>기증 현황</h2>
              </div>
              <div class="info__content">
                <div class="time relative">
                  <p class="flex"><strong>2020.11.04 00시</strong>기준</p>
                  <div class="promote__select absolute right-0">
                    <select name="" id="">
                      <option value="">2020년</option>
                    </select>
                  </div>
                </div>
                <div class="tab-area">
                  <div class="tabBtn flex">
                    <a href="" class="active">월별 뇌사자 장기 기증건 추이</a>
                    <a href="">월별 뇌사자 조직 기증건 추이</a>
                  </div>
                  <div class="tabCont">
                    <div class="tabItem">
                      <div class="box">
                        <div class="barChart6">
                          <p class="unit">단위 : 명</p>
                          <div class="status">
                            <div class="col type1">
                              <header>전국 <strong>404</strong></header>
                              <div class="progress">
                                <span style="width: 40%"></span>
                              </div>
                              <p>전일대비(+2)</p>
                            </div>
                            <div class="col type2">
                              <header>중부권역 <strong>223</strong></header>
                              <div class="progress">
                                <span style="width: 40%"></span>
                              </div>
                              <p>전일대비(+2)</p>
                            </div>
                            <div class="col type3">
                              <header>충청·호남권역 <strong>72</strong></header>
                              <div class="progress">
                                <span style="width: 40%"></span>
                              </div>
                              <p>전일대비(+2)</p>
                            </div>
                            <div class="col type4">
                              <header>영남권역 <strong>23</strong></header>
                              <div class="progress">
                                <span style="width: 40%"></span>
                              </div>
                              <p>전일대비(+2)</p>
                            </div>
                          </div>
                          <canvas id="barChart"></canvas>
                        </div>
                      </div>
                      <div class="box">
                        <div class="subTit">
                          <h3>월별 뇌사자 장기 기증건 추이표</h3>
                        </div>
                        <div class="scrollbox">
                          <div class="table infoTable border-orange">
                            <table>
                              <colgroup>
                                <col width="240px" class="m-width-150" />
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
                                <col />
                                <col />
                              </colgroup>
                              <thead>
                                <tr>
                                  <th class="orange">월</th>
                                  <th class="orange">1월</th>
                                  <th class="orange">2월</th>
                                  <th class="orange">3월</th>
                                  <th class="orange">4월</th>
                                  <th class="orange">5월</th>
                                  <th class="orange">6월</th>
                                  <th class="orange">7월</th>
                                  <th class="orange">8월</th>
                                  <th class="orange">9월</th>
                                  <th class="orange">10월</th>
                                  <th class="orange">11월</th>
                                  <th class="orange">12월</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="orange bg-gray">중부권역</td>
                                  <td>24</td>
                                  <td>22</td>
                                  <td>12</td>
                                  <td>26</td>
                                  <td>20</td>
                                  <td>27</td>
                                  <td>12</td>
                                  <td>3</td>
                                  <td>5</td>
                                  <td>8</td>
                                  <td>11</td>
                                  <td>11</td>
                                </tr>
                                <tr>
                                  <td class="orange bg-gray">충청·호남권역</td>
                                  <td>24</td>
                                  <td>22</td>
                                  <td>12</td>
                                  <td>26</td>
                                  <td>20</td>
                                  <td>27</td>
                                  <td>12</td>
                                  <td>3</td>
                                  <td>5</td>
                                  <td>8</td>
                                  <td>11</td>
                                  <td>11</td>
                                </tr>
                                <tr>
                                  <td class="orange bg-gray">영남권역</td>
                                  <td>24</td>
                                  <td>22</td>
                                  <td>12</td>
                                  <td>26</td>
                                  <td>20</td>
                                  <td>27</td>
                                  <td>12</td>
                                  <td>3</td>
                                  <td>5</td>
                                  <td>8</td>
                                  <td>11</td>
                                  <td>11</td>
                                </tr>
                                <tr>
                                  <td class="orange bg-gray">월별누적</td>
                                  <td class="orange">24</td>
                                  <td class="orange">22</td>
                                  <td class="orange">12</td>
                                  <td class="orange">26</td>
                                  <td class="orange">20</td>
                                  <td class="orange">27</td>
                                  <td class="orange">12</td>
                                  <td class="orange">3</td>
                                  <td class="orange">5</td>
                                  <td class="orange">8</td>
                                  <td class="orange">11</td>
                                  <td class="orange">11</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="box">
                        <div class="subTit flex justify-between">
                          <h3 class="flex items-center">
                            권역별 월 장기 기증건 추이
                            <span class="ml-2">(11.05. 00시 기준)</span>
                          </h3>
                          <div class="promote__select">
                            <select name="" id="">
                              <option value="">11월</option>
                            </select>
                          </div>
                        </div>
                        <div class="blockList flex">
                          <div class="item red flex">
                            전국<strong>5</strong>
                          </div>
                          <div class="item green flex">
                            중부권역<strong>3</strong>
                          </div>
                          <div class="item blue flex">
                            충청·호남권역<strong>1</strong>
                          </div>
                          <div class="item orange flex">
                            영남권역<strong>1</strong>
                          </div>
                        </div>
                      </div>
                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <script>
      var ctx = document.getElementById('barChart').getContext('2d');
      var barChartData = {
        labels: [
          '1월',
          '2월',
          '3월',
          '4월',
          '5월',
          '6월',
          '7월',
          '8월',
          '9월',
          '10월',
          '11월',
          '12월',
        ],
        datasets: [
          {
            label: '영남권역',
            backgroundColor: '#f1a24e',
            stack: 'bar',
            data: [1, 2, 3, 4, 5, 6, 7, 1, 2, 3, 1, 2],
            order: 1,
          },
          {
            label: '충청·호남권역',
            backgroundColor: '#2e81b1',
            stack: 'bar',
            data: [1, 2, 3, 4, 5, 6, 7, 1, 2, 3, 1, 2],
            order: 1,
          },
          {
            label: '중부권역',
            backgroundColor: '#4aa179',
            stack: 'bar',
            data: [1, 2, 3, 4, 5, 6, 7, 1, 2, 3, 1, 2],
            order: 1,
          },
        ],
      };
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          showAllTooltips: true,
        },
      });
    </script>
  </body>
</html>
