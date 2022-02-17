<style>
.card-img-top {
    /* flex-shrink: 0; */
    max-width: 100%;
    max-height: 100%;
}

#pic:hover {
    background: white;
    z-index: 10;
}

#picc {
    z-index: -10;
}

/* Footer */



/* try */
.image {
    position: relative;
    margin: 10px;
    padding: auto;
    width: 300px;
    height: 300px;
}

.mask {
    position: absolute;
    background: white;
    width: 300px;
    height: 300px;
    left: 0;
    top: 0;
    opacity: 0;
    color: black;
    font-size: 20px;
    text-align: center;
}

.mask:hover {
    transition: 1.5s;
    opacity: 1;
}

.carousel-item {
    height: 650px;
}

.my-5 {
    box-sizing: border-box;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%;
    /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>

<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col col-6 " style="font-weight:bold">
            <h3> TextileDesign</h3>
        </div>


        <div class="col col-6 " style=" text-align:right">
            我的布我的布我的布我的布我的布<br>
            我的布我的布我的布我的布我的布我的布我的布<br>
            我的布我的布我的布我的布我的布<br>
            我的布我的布我的布我的布我的布我的布我的布<br>
        </div>

    </div>

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


        </div>
        <!-- 1end -->
        <div>
            <br><br><br><br><br><br><br>
            <hr>
        </div>

                    <!-- 2 -->

                    <br> <br>
                    <div class="row">
                        <div class="col col-6 " style="font-weight:bold">
                            <h3> Web Design</h3>
                        </div>


                        <div class="col col-6 " style=" text-align:right">
                            我的布我的布我的布我的布我的布<br>
                            我的布我的布我的布我的布我的布我的布我的布<br>

                        </div>



                    </div>


                    <div class="container">
                        <div id="portfo" class="py">


                            <div class="row ">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/vote.png" style="width: 300px;">
                                        <div class="mask">
                                            <div class="my-5">投票系統<br>以PHP搭配<br>
                                                MySQL資料庫撰寫而成</div>
                                            <a href="http://220.128.133.15/s1100426/vote/" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/calender.png">
                                        <div class="mask">
                                            <div class="my-5">萬年曆<br>以PHP撰寫而成，<br>在CSS中使用自己的手繪圖</div>
                                            <a href="http://220.128.133.15/s1100426/calender/" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/myweb.png" class="card-img-top">
                                        <div class="mask">
                                            <div class="my-5">一頁式個人網站<br>以Bootstrap&手繪圖<br>
                                                完成的一頁式個人網站</div>
                                            <a href="https://hcyeeeee.github.io/front-portfolio/" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/myweb.png" class="card-img-top">
                                        <div class="mask">
                                            <div class="my-5">還沒做...<br>用opendata串接資料</div>
                                            <a href="" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                            </div>      <!-- 2end -->

        <div>
            <br>
            <br>
            <hr>
            <br>
            <br>
        </div>

        <!-- 3 -->

        <br> <br>
        <div class="row">
            <div class="col col-6 " style="font-weight:bold">
                <h3> Graphic Design</h3>
            </div>


            <div class="col col-6 " style=" text-align:right">
                
            </div>


          
            <div class="row ">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/00.jpg" style="width: 300px;">
                                        <div class="mask">
                                            <h1 class="my-5">see more</h1>
                                            <a href="https://issuu.com/hcyeeeee/docs/2021_portfolio_71488229e5d9ad" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/2.png" style="width: 300px;">
                                        <div class="mask">
                                            <h1 class="my-5">see more</h1>
                                            <a href="https://issuu.com/hcyeeeee/docs/2021_portfolio_71488229e5d9ad" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/newyear.png" style="width: 300px;">
                                        <div class="mask">
                                            <h1 class="my-5">see more</h1>
                                            <a href="https://issuu.com/hcyeeeee/docs/2021_portfolio_71488229e5d9ad" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/55.png" style="width: 300px;">
                                        <div class="mask">
                                            <h1 class="my-5">see more</h1>
                                            <a href="https://issuu.com/hcyeeeee/docs/2021_portfolio_71488229e5d9ad" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                            </div>      <!-- 2end -->







                            </body>

                            </html>


                            <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                            var img = document.getElementById("myImg");
                            var modalImg = document.getElementById("img01");

                            var captionText = document.getElementById("caption");
                            img.onclick = function() {
                                modal.style.display = "block";
                                modalImg.src = this.src;
                                captionText.innerHTML = this.alt;
                            }

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }


                            $(window).load(function() {
                                // The slider being synced must be initialized first
                                $('#carousel').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: false,
                                    itemWidth: 210,
                                    itemMargin: 5,
                                    asNavFor: '#slider'
                                });

                                $('#slider').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: false,
                                    sync: "#carousel"
                                });
                            });
                            </script>