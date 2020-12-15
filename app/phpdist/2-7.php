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
                <div
                  class="memorial__message-info memorial__message-info--receive"
                >
                  <div class="imgbox">
                    <p>
                      수혜자 편지는 이식으로 새생명을 살고 있는 분들의
                      이야기입니다.<br />
                      언제 어디서나 시간과 장소에 구애받지 않고, 익명으로 작성이
                      가능합니다.
                    </p>
                  </div>
                  <div class="infobox">
                    <h2>수혜자 편지 작성 시 확인하세요!</h2>
                    <ul>
                      <li>
                        생명을 나눠준 기증자에 대한 예의를 지켜 주시기 바랍니다.
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
                        원문의 의미를 훼손하지 않는 범위내 에서 교정을 거쳐
                        익명으로 게재될 수 있습니다.
                      </li>
                    </ul>
                    <a href="" class="write-button mt-auto">
                      <strong class="type2">수혜자 편지쓰기</strong>
                    </a>
                  </div>
                </div>

                <div class="memorial__search-form">
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

                <div class="memorial__message-list">
                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
                  </div>

                  <div class="item">
                    <a href="">
                      <header>
                        <span class="count">3893번째 편지</span>
                        <strong class="is_new">NEW</strong>
                      </header>
                      <h2 class="title">보고싶다.</h2>
                      <div class="info">
                        <div class="row">
                          <span>수혜자</span>
                          <strong>김래원</strong>
                        </div>
                      </div>
                      <span class="foot">
                        <span>2020-10-19</span>
                        <span>조회 22</span>
                        <span>댓글 0</span>
                      </span>
                    </a>
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

                <div class="action-button">
                  <a href="">수혜자 편지쓰기</a>
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
