<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
</script>
<!-- nav -->

<nav class="navbar navbar-expand-md navbar-white bg-white ">
    <div class="container-fluid d-flex justify-content-center">

        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNavDropdown">
            <div class="d-flex justify-content-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><img src="./img/home.png"
                                width="110" height="75" class="mt-2" alt=""></a>
                        </a>
                    </li>
                    <!-- aboutme -->
                    <li class="nav-item">
                        <a class="nav-link" href="?do=about">
                            <img src="./img/about.png" width="120" height="55" class="mt-3" alt="">
                        </a>
                    </li>
                    <!-- project -->
                    <li class="nav-item">
                        <a class="nav-link" href="?do=work">
                            <img src="./img/project.png" width="120" height="80" alt="" class="mt-2">
                        </a>
                    </li>

                    <!-- contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="?do=contact"> <img src="./img/contact.png" width="170" height="70"
                                class="mt-2" alt=""></a>
                    </li>
                    <br> <br> <br>
                    <!-- login -->
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link mt-1 "> <img src="./img/login.png" width="110" height="75"
                                alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</nav>
</div>

<script type="text/javascript">
$(function() {
    $('.navbar-toggler').click(function() {
        // $('nav').addClass('status_open')
        //建議改成toggle寫法，這樣就不用另外再寫收合時的css代碼或js了
        $('.navbar-collapse').toggle()
    })
})
</script>
<!-- nav end -->