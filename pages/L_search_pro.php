<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
?>



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap font icons -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" /> -->
    <title>Document</title>
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" style="background-color:#00000081">
          <div class="container">
            <a class="navbar-brand" href="./index.html"><span style="color: #06ede2;">Nano</span><span style="color: rgb(255, 255, 255);">Review</span></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./L_search_pro.php" style="color: #ffc2d6">Laptops</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./search_pro.php" style="color: #ffc2d6">Mobiles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="P_search_pro.php" style="color: #ffc2d6">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Validate.php" style="color: #ffc2d6">Contibute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" style="color: #ffc2d6">Compare</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="./About_us.html" style="color: #ffc2d6">About Us </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php" style="color: #ffc2d6">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->



<!-- Carousal  -->
<section>
          <!-- Intro -->
          <div id="intro" class="bg-image"  width="50em"   >
            <div class="mask" style="background-color: #EFF5F5;">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5" ></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="6" ></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="7" ></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="8" ></li>
                    </ol>
                    <div class="carousel-inner" style="min-height: 50vh; background-position: center; background-size: cover; position: relative;">
                      <div class="carousel-item active">
                        <img class="d-block" src="https://media.pricebook.co.id/article/5f633c76b92c2e1f0b8b4567/5f633c76b92c2e1f0b8b4567_1600340048.jpg" height="540em" width="100%" width="500em" alt="First slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://notebookspec.com/web/wp-content/uploads/2021/01/ROG-2021-Family-website-banner_1920-x-740_Fn.jpg" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://staticg.sportskeeda.com/editor/2021/11/c29e1-16375698667658-1920.jpg" width="100%" alt="Second slide" height="540em">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://www.aorus.com/event/laptops/gaming/assets/images/gallery/aorus/aorus-intel-11th-gen-gaming-laptop-11.jpg" width="100%" height="540em" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://storage-asset.msi.com/global/picture/news/2019/nb/Laptop-20190614-1.jpg" height="540em" width="100%" width="500em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://cdn.tgdd.vn/Files/2022/07/29/1451311/asus-ra-mat-laptop-gaming-rog-strix-scar-17-se-cau-hinh-sieu-khung-5.jpg" height="540em" width="100%" width="500em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://imageio.forbes.com/specials-images/imageserve/623c4f883a731ff28fe8cac3/Nubia-RedMagic-7-series/960x0.jpg?format=jpg&width=960" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://www.techspot.com/images2/news/bigimage/2020/05/2020-05-27-image-56.jpg" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://cdn.cs.1worldsync.com/syndication/mediaserverredirect/7da6ce3a35031203cf482f1022e1b18e/video_width20(1200).jpg" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <!-- <span class="sr-only">Previous</span> -->
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <!-- <span class="sr-only">Next</span> -->
                    </a>
                  </div>
                </div>
              </div>
              <!-- Intro -->
            </section>
        <!-- carousel -->





<!-- Fetch to display the features --> 
<center>
<img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
<!-- <div class="container-fluid" style="width: 500px; height:300px;"> -->
<form action="../pages/L_search_res.php" method="POST">
<div class="form-floating " >
<select  style="width:300px;" class="form-select" name="laptop_name" aria-label="Floating label select example">
              <option></option>
              <?php 
              $query = "SELECT * FROM l_des_img";
              $result1 = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result1)):; ?>
            <option name="formSearch">  <?php echo $row[0]; ?>  </option>
            <?php endwhile; ?>  
            </select><br>
      <label for="floatingSelect" style="left:44%; position:absolute;">Select the Catogery</label>
      <button type="submit"  name="fetch" class="btn btn-outline-success ">Fetch</button> 

    </div>
</form>
</center>
<!-- Fetch to display the features --> 










<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html> 