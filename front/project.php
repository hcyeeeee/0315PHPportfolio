<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.mask {
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

/* .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
} */

.aaa:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

  <!-- <div class="col">
  <img src="https://picsum.photos/seed/picsum/1000/800" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">seemore</div>
    <div class="">這是我做的啦啦啦啊ㄌ</div>
  </div>
  </div> -->




<div class="container">
  <div class="row">
      <div class="col col-4 aaa">
      <img src="https://picsum.photos/seed/picsum/1000/800" alt="Avatar" class="image">
      <div class="overlay">
      <div class="text">Hello World</div>
      </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="image">
            <img src="https://picsum.photos/seed/picsum/1000/800" class="card-img-top">
            <div class="mask">
              <div class="my-5">展覽海報<br>以AI和手繪繪製而成</div>
              <a href="https://www.behance.net/gallery/114069167/Textile-Exhibition-Poster" target="_blank"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
      </div>

    <div class="col col-4 aaa">
       <img src="https://picsum.photos/seed/picsum/1000/800" alt="Avatar" class="image">
       <div class="overlay">
       <div class="text">Hello World</div>
       </div>
       </div>

  </div>
  </div>
</div>
