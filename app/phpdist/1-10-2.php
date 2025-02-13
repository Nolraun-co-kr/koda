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
                <h2>기증용어설명</h2>
                <p>기증 관련 용어를 정리해 놓은 곳입니다.</p>
              </div>

              <div class="sub__tabs">
                <a href="" class="">권역 구분</a>
                <a href="" class="active">병원 구분</a>
                <a href="">기증자 구분</a>
                <a href="" style="width: 35%; flex: none">
                  장기·조직기증 활성화프로그램<br />
                </a>
                <a href="">기타</a>

                <div class="select">
                  <button>조직기증 동의 시</button>
                  <div class="dropdown">
                    <a href="">권역 구분</a>
                    <a href="">병원 구분</a>
                    <a href="">기증자 구분</a>
                    <a href="">장기·조직기증 활성화프로그램</a>
                    <a href="">기타</a>
                  </div>
                </div>
              </div>

              <div class="content">
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

                <div class="hptable-info">
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          뇌사판정대상자관리전문기관<br />
                          Hospital-based Organ Procurement Organization, HOPO
                        </th>
                        <td>
                          뇌사판정대상자에 대하여 장기 등의 기증을 위해
                          뇌사판정, 적출, 이식에 관한 일련의 업무를 통합적으로
                          수행하는 기관을 말함. 보건복지부령으로 정하는 시설,
                          장비 및 인력 등의 조건을모두 갖춘의료기관으로
                          우리나라에는 36개 병원이 있다.
                        </td>
                      </tr>
                      <tr>
                        <th>뇌사판정의료기관</th>
                        <td>
                          장기 등 적출 및 이식을 위한 뇌사판정업무를 할 수
                          있도록 보건복지부로부터 위탁받은 의료기관
                        </td>
                      </tr>
                      <tr>
                        <th>
                          뇌사관리업무 협약병원<br />
                          KODA 협약병원
                        </th>
                        <td>
                          장기기증 활성화를 위해 뇌사추정자 발굴과 관리, 구득
                          등의 절차를 원만히 진행하기 위해 한국장기조직기증원과
                          협약을 맺은 병원
                        </td>
                      </tr>
                      <tr>
                        <th>
                          독립장기조직구득기관<br />
                          lndependent Organ Procurement Organization, I0PO
                        </th>
                        <td>
                          뇌사추정자 파악과 관리, 뇌사판정 및 장기적출 절차의
                          진행 지원, 기증정보 전달 및 설득, 기증자에 대한 지원
                          등의 업무를 수행하는 기관으로 국내에서는
                          한국장기조직기증원이 이에 해당됨.
                        </td>
                      </tr>
                      <tr>
                        <th>발생병원</th>
                        <td>뇌사추정자가 발생한 병원</td>
                      </tr>
                      <tr>
                        <th>신규발생병원</th>
                        <td>기증자가 금년에 처음으로 발생한 병원</td>
                      </tr>
                      <tr>
                        <th>KODA LAB</th>
                        <td>
                          한국장기조직기증원이 개설하여 운영하는 뇌사자 장기기증
                          및 이식을 위한수탁검사를 전문적으로 시행하는 진단
                          검사의학 검사실
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
