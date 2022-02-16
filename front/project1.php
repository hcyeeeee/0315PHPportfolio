<style>
#portfo{
  /* background:rgba(1, 1, 1,0.5); */
  color:#00fff0;
}
.card-img-top{
  /* flex-shrink: 0; */
  max-width: 100%;
  max-height: 100%;
}
#pic:hover{
  background: #eee;
  z-index: 10;
}
#picc{
  z-index: -10;
}
/* Footer */
.lightblue{
  border-color:white;
  color:white;
}
.lightblue:hover {
  background-color: white;
  color:white;
}
.footer{
  color:#00fff0 !important;
}

/* try */
.image{
  position: relative;
  width: 230px;
  height: 230px;
}
.mask{
  position: absolute;
  background: rgba(17, 17, 17, .7);
  width: 230px;
  height: 230px;
  left: 0;
  top: 0;
  opacity: 0;
  color: #ff05db;
  text-align: center;
}
.mask:hover{
  transition: 1.5s;
  opacity: 1;
}

</style>




<!-- Portfolio -->
<div id="portfo" class="py-5">
  <header class="container text-center">
    <div class="bigTitle bt4">PORTFOLIO</div>
  </header>
  <div class="container here">
    <div class="row px-5 py-5" style="background: #000;">
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="https://picsum.photos/seed/picsum/1000/800" class="card-img-top">
            <div class="mask">
              <div class="my-5">發票對獎系統<br>以PHP搭配MySQL資料庫撰寫而成</div>
              <a href="http://220.128.133.15/s1090410/PhpInvoice/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p9.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">萬年曆<br>以PHP撰寫而成，在CSS中使用自己的手繪圖</div>
              <a href="http://220.128.133.15/s1090410/PhpCalendar/index.php" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p8.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">日升日落小動畫<br>以CSS撰寫而成，在CSS中使用自己的手繪圖</div>
              <a href="https://codepen.io/sleepyweed/pen/KKMdrqe" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p10.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">毛刺特效按鈕<br>以CSS撰寫而成的Hover動畫</div>
              <a href="https://codepen.io/sleepyweed/pen/MWjzGgg" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p17.png" class="card-img-top">
            <div class="mask">
              <div class="my-5">展覽海報<br>以AI和手繪繪製而成</div>
              <a href="https://www.behance.net/gallery/114069167/Textile-Exhibition-Poster" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p11.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">2021牛年年曆<br>以PS製作而成，搭配自行繪製的圖案</div>
              <a href="https://www.behance.net/gallery/114069423/2021-Calendar" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p12.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">酒品廣告海報<br>以PS製作而成，搭配圖片襯托出酒品的香醇</div>
              <a href="https://www.behance.net/gallery/114069581/Sake-Poster" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p13.jpg" class="card-img-top">
            <div class="mask">
              <div class="my-5">旅遊宣傳海報<br>以PS製作而成，運用透明度的差異呈現東京的氛圍</div>
              <a href="https://www.behance.net/gallery/114069957/Tokyo-Travel-Poster" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p7.png" class="card-img-top">
            <div class="mask">
              <div class="my-5">CIS Logo設計<br>以AI製作而成，我以自己的工作室為例，設計一完整企畫</div>
              <a href="https://www.behance.net/gallery/114070767/Logo-Design-Project" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p15.png" class="card-img-top">
            <div class="mask">
              <div class="my-5">API串接練習<br>使用開放資料平台去做資料的串接，並且搭配Datatable套件</div>
              <a href="http://220.128.133.15/s1090410/api/api.html" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p16.png" class="card-img-top">
            <div class="mask">
              <div class="my-5">JS小遊戲<br>使用Sweetalert套件製作之二選一小遊戲</div>
              <a href="https://sleepyweed.github.io/JS_storyGame/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="image">
            <img src="img/p14.png" class="card-img-top">
            <div class="mask">
              <div class="my-5">JS數位時鐘<br>以JS撰寫而成，搭配css的mix-blend-mode特效製作負片效果</div>
              <a href="https://sleepyweed.github.io/JS_digiClock/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>



    </div>
  </div>
</div>