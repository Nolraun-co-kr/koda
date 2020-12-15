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
                <h2>하늘나라 편지</h2>
              </div>
              <div class="sub__tabs memorial">
                <a href="" class="">기증자 추모관</a>
                <a href="" class="active">하늘나라 편지</a>
                <a href="" class="">수혜자 편지</a>
                <a href="" class="">기증 후 스토리</a>

                <div class="select">
                  <button>기증자 추모관</button>
                  <div class="dropdown">
                    <a href="" class="">기증자 추모관</a>
                    <a href="" class="">하늘나라 편지</a>
                    <a href="" class="">수혜자 편지</a>
                    <a href="" class="">기증 후 스토리</a>
                  </div>
                </div>
              </div>

              <div class="memorial__message">
                <div class="memorial__message-info" style="margin-bottom: 20px">
                  <div class="infobox">
                    <h2>하늘나라 편지 작성 시 확인하세요!</h2>
                    <ul>
                      <li>
                        경건한 분위기에서 기증자분들을 추모할 수 있도록 협조
                        부탁드립니다.
                      </li>
                      <li>
                        비방이나 욕설 등 분위기를 해치는 내용은 관리자에 의해
                        임의 삭제될 수 있습니다.
                      </li>
                      <li>
                        게시글 작성시 개인정보 표기는 자제해주시기 바랍니다.
                      </li>
                      <li>
                        일부 게시글은 한국장기조직기증원 뉴스레터 및 타 매체에
                        원문의 의미를 훼손하지 않는 범위내에서 교정을 거쳐
                        익명으로 게재될 수 있습니다.
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="memorial__write">
                  <table>
                    <colgroup>
                      <col class="memorial__write-col1" />
                      <col class="memorial__write-col2" />
                    </colgroup>
                    <tbody>
                      <tr>
                        <th>
                          <strong class="require">추모자</strong>
                        </th>
                        <td>
                          <div class="flex has-ck">
                            <div class="input w350">
                              <input type="text" />
                            </div>

                            <label for="ck1" class="checkbox">
                              <input type="checkbox" id="ck1" hidden />
                              <span></span>
                              <p>익명으로 작성하기</p>
                            </label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <strong class="require">비밀번호</strong>
                        </th>
                        <td>
                          <div class="flex">
                            <div class="input w350">
                              <input type="text" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <strong class="">기증자</strong>
                        </th>
                        <td>
                          <div class="flex">
                            <div class="input w350">
                              <input type="text" />
                            </div>
                            <button class="submit">검색</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <strong class="require">제목</strong>
                        </th>
                        <td>
                          <div class="flex">
                            <div class="input">
                              <input type="text" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" style="padding: 10px 0">
                          <textarea
                            name=""
                            id=""
                            style="
                              border: 1px solid #ddd;
                              width: 100%;
                              height: 300px;
                              resize: none;
                            "
                          >
editor...</textarea
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-actions justify-center">
                  <button class="btn submit">등록</button>
                  <a href="" class="btn">취소</a>
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
