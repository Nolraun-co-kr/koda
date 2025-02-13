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
        <div class="sub medical">
          <div class="sub__visual">
            <div class="sub__pagename">
              <div class="wrap">
                <h2>의료진 페이지</h2>
                <p>의료진 전용 페이지 입니다.</p>
                <img class="img" src="./assets/images/sub-visual8.png" alt="" />
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
                <h2>뇌사판정</h2>
              </div>
              <div class="medical__content medical__committee border-orange">
                <div class="box box1">
                  <div class="circle-tit">
                    <h3 class=""><span></span>뇌사판정위원회</h3>
                  </div>
                  <div class="txtBox">
                    <div class="row flex items-center">
                      <div class="tit">구성</div>
                      <div class="txt">
                        <p>
                          뇌사판정위원회는 전문의사인 위원 2명 이상과 의료인이
                          아닌 위원 1명 이상을 포함한 과반수의 출석과 출석위원
                          전원의 찬성으로 뇌사판정을 한다.
                        </p>
                      </div>
                    </div>
                    <div class="row flex items-center">
                      <div class="tit">자격</div>
                      <div class="txt">
                        <p>
                          - 의료법에 의한 의료인, 변호사의 자격을 가진 자,
                          공무원, 교원, 종교인, 기타 학식과 사회적 덕망이 풍부한
                          자 중 뇌사판정의료기관장이 위촉
                        </p>
                        <p>
                          - 출석위원 만장일치로 결정 (단 1명이라도 반대 시
                          뇌사판정 하지 못함)
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box box2">
                  <div class="circle-tit">
                    <h3 class=""><span></span>뇌사판정기준</h3>
                    <p>
                      장기 등 이식에 관한 법률 제 21조 관련 다음의 선행조건 및
                      판정기준에 모두 적합하여야 합니다.
                    </p>
                  </div>
                  <div class="tab-area">
                    <div class="tabBtn flex">
                      <div class="item item1">
                        <div class="tit">선행조건</div>
                        <a href="#//" class="links" data-tab="tab1"
                          >자세히보기</a
                        >
                      </div>
                      <div class="item item2">
                        <div class="tit">1차 조사</div>
                        <a href="#//" class="links" data-tab="tab2"
                          >자세히보기</a
                        >
                      </div>
                      <div class="item item3">
                        <div class="tit">2차 조사</div>
                        <a href="#//" class="links" data-tab="tab3"
                          >자세히보기</a
                        >
                      </div>
                      <div class="item item4">
                        <div class="tit">뇌파검사</div>
                        <a href="#//" class="links" data-tab="tab4"
                          >자세히보기</a
                        >
                      </div>
                    </div>
                    <div class="tabView">
                      <div class="tab__item item1 active" id="tab1">
                        <p class="flex items-start">
                          <span>·</span>원인질환이 확실할 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>치료될 가능성이 없는 기질적 (器質的)인
                          뇌병변 (腦病變)이 있을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>깊은 혼수상태로서 자발호흡 (自發呼吸)이
                          없고 인공호흡기로 호흡이 유지되고 있을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>치료 가능한 약물중독 (마취제, 수면제,
                          진정제, 근육이완제, 독극물 등으로 인한 중독을
                          말한다)이나 대사성 (代謝性) 장애의 가능성이 없을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>치료 가능한 내분비성 장애 [간성혼수
                          (肝性昏睡), 요독성혼수 (尿毒性昏睡), 저혈당성뇌증
                          (低血糖性腦症) 등을 말한다]의 가능성이 없을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>저체온상태 [직장온도 (直腸溫度)가 섭씨
                          32° 이하인 상태를 말한다]나 쇼크 상태가 아닐 것
                        </p>
                      </div>
                      <div class="tab__item item2" id="tab2">
                        <p class="flex items-start">
                          <span>·</span>외부자극에 전혀 반응이 없는 깊은
                          혼수상태일 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>자발호흡이 되살아날 수 없는 상태로
                          소실되었을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>두 눈의 동공이 확대·고정되어 있을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>뇌간반사가 완전히 소실되어 있을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>자발운동 ·제뇌경직 ·제피질경직 및 경련
                          등이 나타나지 않을 것
                        </p>
                        <p class="flex items-start">
                          <span>·</span>무호흡검사 결과 자발호흡이 유발되지 않아
                          자발호흡이 되살아날 수 없다고 판정될 것
                        </p>
                      </div>
                      <div class="tab__item item3" id="tab3">
                        <p class="flex items-start">
                          <span>·</span>6세 이상 : 6시간 후
                        </p>
                        <p class="flex items-start">
                          <span>·</span>1세 이상 ~ 6세 미만인 소아 : 24시간 후
                        </p>
                        <p class="flex items-start">
                          <span>·</span>생후 2월 이상~1세 미만인 소아 : 48시간
                          후
                        </p>
                      </div>
                      <div class="tab__item item4" id="tab4">
                        <p class="flex items-start">
                          <span>·</span>평탄뇌파 20분 이상 지속
                        </p>
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
  </body>
</html>
