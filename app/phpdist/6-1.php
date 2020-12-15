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
                <h2>단계별 기증 현황</h2>
              </div>
              <div class="info__content">
                <div class="donation-status">
                  <div class="time">
                    <p class="flex"><strong>2020.11.04 00시</strong>기준</p>
                  </div>
                  <div class="table border-orange">
                    <table>
                      <colgroup>
                        <col width="100px" class="m-hidden" />
                        <col />
                        <col />
                        <col />
                        <col width="100px" class="m-hidden" />
                      </colgroup>
                      <thead>
                        <tr>
                          <th class="m-hidden"></th>
                          <th class="hospital">
                            <span>병원명</span>
                          </th>
                          <th class="organ">
                            <span>장기기증</span>
                          </th>
                          <th class="tissue">
                            <span>조직기증</span>
                          </th>
                          <th class="m-hidden"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="m-hidden"></td>
                          <td>
                            <span class="mint">강남성심병원</span>
                          </td>
                          <td>
                            <span class="blue">뇌파 재검 예정</span>
                          </td>
                          <td>
                            <span class="gray">거부</span>
                          </td>
                          <td class="m-hidden"></td>
                        </tr>
                        <tr>
                          <td class="m-hidden"></td>
                          <td>
                            <span class="mint">
                              가톨릭대학교<br />
                              인천성모병원
                            </span>
                          </td>
                          <td>
                            <span class="orange">기증완료</span>
                          </td>
                          <td>
                            <span class="gray">거부</span>
                          </td>
                          <td class="m-hidden"></td>
                        </tr>
                        <tr>
                          <td class="m-hidden"></td>
                          <td>
                            <span class="mint">
                              가톨릭대학교<br />
                              인천성모병원
                            </span>
                          </td>
                          <td>
                            <span class="orange">기증완료</span>
                          </td>
                          <td>
                            <span class="orange">기증완료</span>
                          </td>
                          <td class="m-hidden"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="donation-step">
              <div class="wrap">
                <div class="title">올해 생명나눔은 이렇게 진행되고 있어요</div>
                <div class="stepBox flex justify-between">
                  <div class="item item1">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">통보</div>
                      <div class="txt">
                        뇌사추정자 및 사후<br />
                        잠재 조직기증자 통보
                      </div>
                    </div>
                  </div>
                  <div class="item item2">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">코디네이터 출동</div>
                      <div class="txt">
                        병원 출동 후<br />
                        의료진 면담 진행
                      </div>
                    </div>
                  </div>
                  <div class="item item3">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">보호자 접촉</div>
                      <div class="txt">
                        보호자 면담<br />
                        기증 설명
                      </div>
                    </div>
                  </div>
                  <div class="item item4">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">기증동의</div>
                    </div>
                  </div>
                  <div class="item item5">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">기증완료</div>
                    </div>
                  </div>
                  <div class="item item6">
                    <div class="img"></div>
                    <div class="txtBox">
                      <div class="tit">가족지원</div>
                      <div class="txt">
                        사회복지사<br />
                        정서적 지원 제공
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
