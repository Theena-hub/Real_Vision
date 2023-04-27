<nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean" style="/*background: #0d1c12;*/ background:url(vbg7.jpg);padding: 0px;box-shadow:0 4px 4px 0 rgba(0,0,0,0.3)">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);padding: 0px;">
            <img style="width: 80px;height: auto;" class="" src="assets/img/logo.png" alt="logo">
        </a>
        <!-- <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <button class="navbar-toggler active" id="tog-btn" onclick="togShow()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="tog-show" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php#about">ABOUT US</a></li>                              
                <li class="nav-item"><a class="nav-link" href="residential.php">RESIDENTIAL</a></li>
                <li class="nav-item"><a class="nav-link" href="commercial.php">COMMERCIAL</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">CONTACT US</a></li>
             </ul>
        </div>
    </div>  
</nav>   


<script type="text/javascript">
    function togShow() {
        document.getElementById("tog-show").classList.add("show");
        document.getElementById('tog-btn').setAttribute("onclick","togHide()")
    }
    function togHide() {
        document.getElementById('tog-show').classList.remove("show");
        document.getElementById('tog-btn').setAttribute("onclick","togShow()")
    }
</script>