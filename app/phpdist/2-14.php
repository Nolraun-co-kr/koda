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
        <div class="sub memorial">
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
                <h2>기증 후 행정처리</h2>
              </div>

              <div class="memorial__process">
                <header>
                  <h3>기증 후 행정처리</h3>
                  <p>
                    사후행정처리는 장기조직기증 후 뿐만이 아니라, 누구라도 사망
                    후에 진행해야 하는 절차 중 하나입니다.
                  </p>
                </header>

                <div class="body">
                  <div class="table">
                    <table>
                      <colgroup>
                        <col class="memorial__process-col1" />
                        <col class="memorial__process-col2" />
                        <col class="memorial__process-col3" />
                      </colgroup>
                      <thead>
                        <tr>
                          <th>처리관서</th>
                          <th colspan="2">민원항목</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>동주민센터 (기증자 거주지등록 기준)</td>
                          <td colspan="2">
                            · 사망신고<br />
                            · 안심상속 원스톱 서비스<br />
                            · 기초생활수급자 장제비 신청(해당자)
                          </td>
                        </tr>
                        <tr>
                          <td>기증자 가족이 직접 또는 법무사 고용</td>
                          <td>· 단순승인</td>
                          <td>
                            - 상속포기 또는 한정승인<br />
                            ※ 상속포기 또는 한정승인 시, 확인 후 절차 진행
                          </td>
                        </tr>
                        <tr>
                          <td>해당 보험회사, 국민연금공단</td>
                          <td colspan="2">· 사보험 및 유족연금 확인</td>
                        </tr>
                        <tr>
                          <td>해당 카드사, 통신사, 은행</td>
                          <td colspan="2">
                            · 신용카드 및 휴대전화 해지, 통장전리<br />
                            ※ 상속포기 또는 한정승인 시, 확인 후 절차 진행
                          </td>
                        </tr>
                        <tr>
                          <td>세무서</td>
                          <td colspan="2">· 사업자등록 정정 및 폐업 신고</td>
                        </tr>
                        <tr>
                          <td>차량등록사업소</td>
                          <td colspan="2">· 자동차 이전 등록 또는 폐차 말소</td>
                        </tr>
                        <tr>
                          <td>세무서, 시군구청 등</td>
                          <td colspan="2">
                            · 소유권 이전 등기<br />
                            ※ 단순승인 시 해당
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p style="color: #e64c3c" class="mt-4">
                    ※ 자세한 사항은 각 담당부처에 문의해주세요.
                  </p>
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
