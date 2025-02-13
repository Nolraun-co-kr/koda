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
                <h2>뇌사장기기증자 관리업무 협약</h2>
              </div>

              <div class="sub__tabs">
                <a href="" class="active">뇌사장기기증자 관리업무 협약이란</a>
                <a href="" class="">뇌사판정의료기관 현황</a>

                <div class="select">
                  <button>조직기증 동의 시</button>
                  <div class="dropdown">
                    <a href="">뇌사장기기증자 관리업무 협약이란</a>
                    <a href="">뇌사판정의료기관 현황</a>
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="relbox">
                  <div class="relbox__section">
                    <h3 class="codi-title">뇌사판정의료기관</h3>
                    <ul class="codi-list">
                      <li class="">
                        장기 등 적출 및 이식을 위한 뇌사판정 업무를 할 수 있도록
                        보건복지부로부터 지정받은 의료기관
                      </li>
                    </ul>
                  </div>

                  <div class="relbox__section">
                    <h3 class="codi-title">뇌사장기기증자 관리업무 협약</h3>
                    <ul class="codi-list">
                      <li class="">
                        뇌사추정자 발굴과 신속한 연락체계 구축, 기증자 이송 없이
                        신속한 뇌사판정 및 효율적인 관리 수행, 기증을 위한
                        의료정보 취득과 진료 행정지원을 위해
                        한국장기조직기증원과 뇌사관리 병원이 맺는 협약으로
                        한국장기조직기증원과 뇌사관리 협약한 병원의 기증이
                        지속적으로 증가하고 있습니다.
                      </li>
                    </ul>
                  </div>

                  <div class="relbox__section">
                    <h3 class="codi-title">협약·비협약 병원별 기증 추이</h3>
                    <p class="codi-desc">
                      yearly donation by koda contracted hospitals and hopos
                    </p>

                    <div class="lineChart mt-4">
                      <canvas id="lineChart" style=""></canvas>
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
      var ctx = document.getElementById('lineChart').getContext('2d');
      var barChartData = {
        labels: ['2015', '2016', '2017', '2018', '2019'],
        datasets: [
          {
            label: 'HOPO 병원',
            stack: 'HOPO 병원',
            backgroundColor: 'rgba(0, 0, 0, 0.0)',
            borderColor: '#ff7e00',
            pointBackgroundColor: '#ff7e00',
            borderWidth: '2',
            lineTension: 0,
            data: [336, 363, 301, 223, 206],
          },
          {
            label: 'KODA 협약병원',
            stack: 'KODA 협약병원',
            backgroundColor: 'rgba(0, 0, 0, 0.0)',
            borderColor: '#4aa079',
            pointBackgroundColor: '#4aa079',
            borderWidth: '2',
            lineTension: 0,
            data: [165, 210, 214, 226, 244],
          },
        ],
      };
      var myChart = new Chart(ctx, {
        type: 'line',
        data: barChartData,
        options: {
          showAllTooltips: true,
        },
      });
    </script>
  </body>
</html>
