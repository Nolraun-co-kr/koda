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
                <h2>기증자 추모관</h2>
              </div>
              <div class="sub__tabs memorial">
                <a href="" class="active">기증자 추모관</a>
                <a href="" class="">하늘나라 편지</a>
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
              <div class="memorial__search-form">
                <div class="input name">
                  <input type="text" placeholder="기증자명" />
                </div>
                <div class="schedule">
                  <div class="input">
                    <input type="text" class="datepicker" />
                  </div>
                  <span>~</span>
                  <div class="input">
                    <input type="text" class="datepicker" />
                  </div>
                </div>
                <div class="select">
                  <select name="" id="">
                    <option value="">연도 전체</option>
                  </select>
                </div>
                <button class="submit">검색하기</button>
              </div>

              <div class="memorial__card">
                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type1">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type1">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type1">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type1">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
                </div>

                <div class="card-itembox">
                  <!-- hover 시 item-type2가 올라오는 형식 -->
                  <div class="item type2">
                    <h2 class="name">김대원</h2>
                    <p class="number">M.45</p>
                    <p class="date">기증일: 2020-10-09</p>
                    <div class="button">
                      <a href="">
                        <span>하늘나라 편지쓰기</span>
                      </a>
                    </div>
                  </div>
                  <div class="item item--tyep2 type2">
                    <h2 class="name">김대원</h2>
                    <p class="description">
                      하늘의 별이 된<br />
                      당신을 추모합니다.
                    </p>
                    <div class="actions">
                      <a href=""> 온라인 추모 </a>
                      <a href="">
                        하늘나라<br />
                        편지쓰기
                      </a>
                    </div>
                  </div>
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
