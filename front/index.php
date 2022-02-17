<style>
.aa{
  height: 650px;
}



    *{
  margin: 0px;
  padding: 0px;
}

body{
  
  
  color: black;
  line-height: 2;
  text-align: center;
}

.container{
  max-width: 960px;
  margin: auto;
  padding: 0 30px;
}

#showcase{
  height: 300px;
}

#showcase h1{
  font-size: 50px;
  line-height: 1.3;
  position: relative;
  animation: heading;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}

@keyframes heading{
  0% {top: -50px;}
  100% {top: 200px;}
}

#content {
  position: relative;
  animation-name: content;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}

@keyframes content{
  0% {left: -1000px;}
  100% {left: 0px;}
}

.btn{
    display: inline-block;
    color: #111;
    text-decoration: none;
    padding: 1rem 2rem;
    border: #111 1px solid;
    border-radius: 30%;
    margin-top: 40px;
    opacity: 0;
    animation-name: btn;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-fill-mode: forwards;
    transition-property: transform;
    transition-duration: 1s;
  }

.btn:hover{
  transform: rotateY(360deg);
}

@keyframes btn {
  0%{opacity: 0}
  100%{opacity: 1}
}
</style>


  <body>
    <header id="showcase">
      <h1>hi,i'm Hcy</h1>
      <!-- <img src="./img/12.jpg" class="d-block w-100 aa" alt="..."> -->
      <!-- <img src="./img/logo.jpg" alt=""> -->
    </header>
    <div id="content" class="container">
    web designer ,
    </div>
    <a href="./index3.php" class="btn">Read More</a>
    <div class=""><br><br><br><br><br></div>
  </body>







<!-- 
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./img/12.jpg" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/13.jpg" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/11.jpg" class="d-block w-100 " alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div> -->
            <!-- 1end -->