<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>陳聖典。履歷作品集</title>
  <link rel="shortcut icon" href="media/verseLogo.ico" type="image/x-icon">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
  <!-- font icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- bootstrap + custom css -->
  <link rel="stylesheet" href="plugin/bootstrap.min.css">
  <link rel="stylesheet" href="plugin/custom.css">
  <script src="plugin/bootstrap.bundle.js"></script>
</head>

<body>
  <!-- 導覽列 -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#sylSlider"><img class="logo" src="media/white__verseMusicLogo_1.ico">陳聖典．履歷作品集</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sylNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="sylNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php
          $mus=$Menu->all(['sh'=>1,'parent'=>0]);
          foreach ($mus as $key => $value) {
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='{$value['href']}'>";
          
              $subs=$Menu->all(['parent'=>$value['id']]);
              foreach ($subs as $k => $v) {
                  echo "<i class='{$v['text']}'></i>";
              }
              echo "{$value['text']}</a>";
              echo "</li>";
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- 廣告輪播 -->
  <section id="sylSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- 指示器 -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#sylSlider" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#sylSlider" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#sylSlider" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#sylSlider" data-bs-slide-to="3"></button>
    </div>
    <!-- 輪播對象 -->
    <div class="carousel-inner">
      <div class="carousel-item vh-100 active">
        <img src="img/IMG_3681.jpg" class="d-block w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
          <h1>後端工程師</h1>
          <p class="d-none d-md-block">PHP資料庫網頁設計班。泰山訓練場</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="img/IMG_3684.jpg" class="d-block w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
          <h1>職業樂手</h1>
          <p class="d-none d-md-block">2021跨年晚會。花蓮縣玉里鎮</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="img/IMG_3683.jpg" class="d-block w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
          <h1>樂器講師</h1>
          <p class="d-none d-md-block">學生成發。影像視覺</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="img/IMG_3685.jpg" class="d-block w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">
          <h1>街頭表演</h1>
          <p class="d-none d-md-block">活動策畫。音響工程</p>
        </div>
      </div>
    </div>
    <!-- 控制鍵 -->
    <button class="carousel-control-prev" type="button" data-bs-target="#sylSlider" data-bs-slide="prev">
      <span class="material-icons-outlined"><i class="fas fa-angle-double-left fa-3x"></i></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sylSlider" data-bs-slide="next">
      <span class="material-icons-outlined"><i class="fas fa-angle-double-right fa-3x"></i></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>
  <!-- 個人簡介 -->
  <section id="sylIntro" class="container py-5">
    <header class="text-center">
      <h2 class="pb-3">履歷簡介</h2>
      <nav class="nav nav-tabs justify-content-around flex-nowrap">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile">個人簡介</button>
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#goals">求職目標</button>
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#skill">專業技能</button>
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#education">學歷</button>
      </nav>
    </header>
    <article class="tab-content py-5">
      <!-- profile 簡介 -->
      <div class="row tab-pane fade show active" id="profile">
        <!-- tab-pane fade 淡出 -->
        <h3 class="text-end border-bottom border-secondary">Personal Profile 個人簡介</h3>
        <div class="col-md-6 col-lg-4 mb-3 py-5">
          <h1 class="col">你好！</h1>
          <h1 class="col text-center">我是陳聖典</h1>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card">
            <img src="img/<?=$Title->find(['sh'=>1])['img'];?>" class="card-img-top">
            <!-- <img src="img/IMG_7984.jpg" class="card-img-top"> -->
            <div class="card-body">
              <h3>Sylvester Chen</h3>
              <p class="card-text"><small class="text-muted float-end">1986-04-15</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 py-5">
          <p class="text-muted mt-5">
            一位職業音樂人及後端工程師。<br>
            在音樂工作領域有十五年的工作經驗。<br>
            <br>
            2021報名參加職訓局的"PHP資料庫網頁設計班"，
            希望未來有機會在新的領域上一展長才。
          </p>
        </div>
      </div>
      <!-- goals 求職目標-->
      <div class="row tab-pane fade" id="goals">
        <h3 class="text-end border-bottom border-secondary">Job Search Goals 求職目標</h3>
        <div>
          <table class="table table-hover">

            <tr class="row">
              <th class="col-4 text-end">期望職務</th>
              <td class="col">全端/前端/後端網頁設計人員</td>
            </tr>
            <tr class="row">
              <th class="col-4 text-end">工作描述</th>
              <td class="col">依照電腦輸入與輸出之多媒體功能，進行綜合設計，並用電腦網頁設計語言撰寫程式。</td>
            </tr>
            <tr class="row">
              <th class="col-4 text-end">可上班時間</th>
              <td class="col">隨時</td>
            </tr>
            <tr class="row">
              <th class="col-4 text-end">期望工作地點</th>
              <td class="col">雙北地區、遠端</td>
            </tr>
            <tr class="row">
              <th class="col-4 text-end">期望工作性質</th>
              <td class="col">全職</td>
            </tr>
            <tr class="row">
              <th class="col-4 text-end">期望薪資</th>
              <td class="col">面議</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- skill 專業技能-->
      <div class="row tab-pane fade" id="skill">
        <h3 class="text-end border-bottom border-secondary">Professional Skill 專業技能</h3>
        <div>
          <table class="table table-hover">
            <thead>
              <tr class="row">
                <th class="col-4">視覺美工設計</th>
                <th class="col">程度</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row">
                <td class="col-4 text-end">Photoshop</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">70%</div>
                  </div>
                </td>
              </tr>
              <tr class="row">
                <td class="col-4 text-end">illustraor</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">60%</div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="table table-hover">
            <thead>
              <tr class="row">
                <th class="col-4">前端網頁設計</th>
                <th class="col">程度</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row">
                <td class="col-4 text-end">HTML</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">80%</div>
                  </div>
                </td>
              </tr>
              <tr class="row">
                <td class="col-4 text-end">CSS</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">70%</div>
                  </div>
                </td>
              </tr>
              <tr class="row">
                <td class="col-4 text-end">JavaScript</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">60%</div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="table table-hover">
            <thead>
              <tr class="row">
                <th class="col-4">後端程式設計</th>
                <th class="col">程度</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row">
                <td class="col-4 text-end">PHP</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">80%</div>
                  </div>
                </td>
              </tr>
              <tr class="row">
                <td class="col-4 text-end">MySQL</td>
                <td class="col">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">60%</div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- education 學歷 -->
      <div class="tab-pane fade" id="education">
        <!--col content E-->
        <h3 class="text-end border-bottom border-secondary">Education 學歷</h3>
        <table class="table table-hover">
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 聖約翰科技大學 ]</th>
            <td class="col">機械與電腦輔助工程系</td>
          </tr>
          <tr class="row">
            <td class="col-5"></td>
            <td class="col">2004-2010</td>
          </tr>
        </table>
        <h3 class="text-end border-bottom border-secondary">Societies 社團</h3>
        <table class="table table-hover">
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 音樂創作研究社 ]</th>
            <td class="col">創辦人</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 合唱團 ]</th>
            <td class="col">副社長</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 管樂社 ]</th>
            <td class="col">顧問</td>
          </tr>
        </table>
        <h3 class="text-end border-bottom border-secondary">Activity 活動</h3>
        <table class="table table-hover">
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 輕音樂季 ]</th>
            <td class="col">主辦人</td>
          </tr>
          <tr class="row">
            <td class="col-5"></td>
            <td class="col">每學期舉辦一次為期五天的午後音樂演出活動</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 輕鬆出輯 ]</th>
            <td class="col">主辦人</td>
          </tr>
          <tr class="row">
            <td class="col-5"></td>
            <td class="col">每學年收錄社員音樂作品的發表活動</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-warning text-end">[ 滿月之時 ]</th>
            <td class="col">主辦人</td>
          </tr>
          <tr class="row">
            <td class="col-5"></td>
            <td class="col">每學期舉辦一次的大型音樂演出晚會</td>
          </tr>
        </table>
      </div>
    </article>
  </section>
  <hr>
  <!-- 工作經歷 -->
  <section id="sylExp" class="container py-5">
    <header class="text-center">
      <h2 class="pb-3">工作經歷 & 相關經驗</h2>
    </header>
    <article class="row py-5 gy-4 row-cols-lg-2">
      <div class="tab-content">
        <img id="expImg1" class="w-100 img-fluid img-thumbnail tab-pane fade show active" src="img/IMG_3023.jpg">
        <img id="expImg2" class="w-100 img-fluid img-thumbnail tab-pane fade" src="img/IMG_7083.jpg">
        <img id="expImg3" class="w-100 img-fluid img-thumbnail tab-pane fade" src="img/20171124.jpg">
        <img id="expImg4" class="w-100 img-fluid img-thumbnail tab-pane fade" src="img/IMG_36856.jpg">
        <img id="expImg5" class="w-100 img-fluid img-thumbnail tab-pane fade" src="img/MileStone22.jpg">
      </div>
      <!-- 手風琴 -->
      <div class="list-group accordion px-3" id="expMenu">
        <div class="accordion-item" data-bs-toggle="list" data-bs-target="#expImg1">
          <a class="text-decoration-none accordion-header accordion-button" data-bs-toggle="collapse" href="#expText1">
            泰山職業訓練中心
            <small class="position-absolute start-0 top-0 badge bg-warning">2021/03~<br>2021/09</small>
          </a>
          <div id="expText1" class="accordion-collapse collapse show" data-bs-parent="#expMenu">
            <!-- 內文 -->
            <div class="accordion-body mx-4">
              <p>
                PHP資料庫網頁設計課程
              </p>
              <p class="float-end text-warning">
                <b>/ 職訓學員</b>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" data-bs-toggle="list" data-bs-target="#expImg2">
          <a class="text-decoration-none accordion-header accordion-button collapsed" data-bs-toggle="collapse"
            href="#expText2">
            社團法人台北市磐石福音遍傳協會
            <small class="position-absolute start-0 top-0 badge bg-warning">2015/11~<br>2018/1</small>
          </a>
          <div id="expText2" class="accordion-collapse collapse" data-bs-parent="#expMenu">
            <div class="accordion-body mx-4">
              <p>
                業務聯絡全台九百多間教會<br>
                策畫執行全台兩百場以上戶外活動<br>
                網路宣傳。文案撰寫<br>
                影片拍攝。影片剪輯<br>
                樂團演出。燈光音響
              </p>
              <p class="float-end text-warning">
                <b>/ 執行業務</b>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" data-bs-toggle="list" data-bs-target="#expImg3">
          <a class="text-decoration-none accordion-header accordion-button collapsed" data-bs-toggle="collapse"
            href="#expText3">
            天作之合劇場
            <small class="position-absolute start-0 top-0 badge bg-warning">2015/11~<br>2018/1</small>
          </a>
          <div id="expText3" class="accordion-collapse collapse" data-bs-parent="#expMenu">
            <div class="accordion-body mx-4">
              <p>
                音樂劇《寂寞瑪奇朵》巡迴五十場 - 現場演出樂手
              </p>
              <p class="float-end text-warning">
                <b>/ 貝斯手</b>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" data-bs-toggle="list" data-bs-target="#expImg4">
          <a class="text-decoration-none accordion-header accordion-button collapsed" data-bs-toggle="collapse"
            href="#expText4">
            大台北地區音樂教室
            <small class="position-absolute start-0 top-0 badge bg-warning">2004/09~<br>2021</small>
          </a>
          <div id="expText4" class="accordion-collapse collapse" data-bs-parent="#expMenu">
            <div class="accordion-body mx-4">
              <p>
                吉他、貝斯、爵士鼓<br>
                烏克麗麗、木箱鼓
              </p>
              <p class="float-end text-warning">
                <b>/ 樂器講師</b>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" data-bs-toggle="list" data-bs-target="#expImg5">
          <a class="text-decoration-none accordion-header accordion-button collapsed" data-bs-toggle="collapse"
            href="#expText5">
            YAMAHA熱門音樂大賽
            <small class="position-absolute start-0 top-0 badge bg-warning">2005</small>
          </a>
          <div id="expText5" class="accordion-collapse collapse" data-bs-parent="#expMenu">
            <div class="accordion-body mx-4">
              <p>
                北區冠軍。未來之星
              </p>
              <p class="float-end text-warning">
                <b>/ 貝斯手</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
  <!-- 作品集 -->
  <section id="sylFacility" class="py-5">
    <header class="container text-center">
      <h2 class="pb-3 text-light">作品集</h2>
    </header>
    <!-- 設計內容 -->
    <article class="container py-5 text-white">
      <ul class="row gy-4 list-unstyled">
        <li class="col-12 col-lg-6">
          <div class="row gy-4 align-items-center pic">
            <a class="col-sm-6" href="img/homeworkAi01.png" target="_blank">
              <img class="col-12" src="img/homeworkAi01.png">
            </a>
            <div class="col-sm-6">
              <h5>ANIMAL LOGOS</h5>
              <p class="border-bottom border-warning pb-4"></p>
            </div>
          </div>
        </li>
        <li class="col-12 col-lg-6">
          <div class="row gy-4 align-items-center pic">
            <a class="col-sm-6" href="img/grilAi03.png" target="_blank">
              <img class="col-12" src="img/grilAi03.png">
            </a>
            <div class="col-sm-6">
              <h5>鋼筆女孩</h5>
              <p class="border-bottom border-warning pb-4"></p>
            </div>
          </div>
        </li>
        <li class="col-12 col-lg-6">
          <div class="row gy-4 align-items-center pic">
            <a class="col-sm-6" href="animation/animationWord.html" target="_blank">
              <img class="col-12" src="img/animation.png">
            </a>
            <div class="col-sm-6">
              <h5>animation</h5>
              <p class="border-bottom border-warning pb-4"></p>
            </div>
          </div>
        </li>
        <li class="col-12 col-lg-6">
          <div class="row gy-4 align-items-center pic">
            <a class="col-sm-6" href="time/digiclock.html" target="_blank">
              <img class="col-12" src="img/digitime.png">
            </a>
            <div class="col-sm-6">
              <h5>數位時鐘</h5>
              <p class="border-bottom border-warning pb-4"></p>
            </div>
          </div>
        </li>
      </ul>
    </article>
  </section>

  <!-- 聯絡資訊 -->
  <section id="sylContact" class="py-5 bg-dark">
    <div class="container">
      <header class="h2 text-center text-warning mb-4">聯絡資訊</header>
      <div>
        <table class="table table-dark table-hover text-light">
          <tr class="row">
            <th class="col-5 text-end">E-mail</th>
            <td class="col">sylvesterexba@gmail.com</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-end">Cellphone</th>
            <td class="col">0982-569-510</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-end">Facebook</th>
            <td class="col">facebook.com/sylvesterex</td>
          </tr>
          <tr class="row">
            <th class="col-5 text-end">Line ID</th>
            <td class="col">sylvesterex</td>
          </tr>
        </table>
      </div>

    </div>
    <article class="container-fluid bg-light py-5 text-center">
      <div class="d-flex justify-content-center align-items-center flex-wrap">
        <!-- AdsX3 -->
        <a href="https://www.facebook.com/tsvts/" target="_blank" class="link-secondary m-3 p-3 border rounded">
          <i class="fab fa-facebook-square fa-3x"></i><br>
          泰山職業訓練場
        </a>
        <a href="https://tkyhkm.wda.gov.tw/Default.aspx" target="_blank">
          <img src="https://ws.wda.gov.tw/001/Upload/308/sites/pagebackimage/366d4144-bdac-4a20-a1f2-b0846004efc0.png">
        </a>
        <a href="https://www.taiwanjobs.gov.tw/home109/index.aspx" target="_blank">
          <img
            src="https://icmp-ws.chiayi.gov.tw/001/Upload/408/relpic/9352/408618/8e7e31cb-201c-4b6f-802f-920fb8f06e28@710x470.png"
            alt="台灣就業通">
        </a>
      </div>
    </article>
  </section>


  <!-- 頁尾區 -->
  <footer class="bg-dark text-muted text-center py-3">
    <small>
      Sylvester Chen 陳聖典 編輯<br>
      ccopyright &copy; <span class="text-warning">福世音樂<img class="logo"
          src="media/white__verseMusicLogo_1.ico">數位設計</span>. all rights reserved
    </small>
    <!-- 跳躍箭頭 -->
    <div id="sylArrow" class="position-fixed text-white rounded-circle p-2 border-0">
      <a href="#" class="btn btn-secondary">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
  </footer>

</body>

</html>