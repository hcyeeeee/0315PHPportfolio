
<style>
.container {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: 10s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: black;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}


</style>
</head>
<body>



<div class="container" >
  <img src="https://picsum.photos/seed/picsum/1000/800" alt="Avatar" class="image" style="width:100%">
  <div class="middle" id="middle">
    
   
    <h1 style="font-size:142px">I am Hcyeeeee</h1>
    <p>web design</p>
    <p>graphic design</p>
    <p>textile design</p>
    <a href="?do=home"> <button src="./img/login.png">more</button></a>
  </div>

 
</div>


<!-- <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">I am Hcyeeeee</h1>
    <p>web designer</p>
    <a href="?do=index"> <button src="./img/login.png">welcome</button></a>
  </div>
</div> -->

<script>


 
 // 开始写 jQuery 代码...
 $(document).ready(function(){
  $("button").click(function(){
    $("container").hide();
  });
});



</script>



</body>
</html>



