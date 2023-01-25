<?php
$server_name="localhost";
$user_name="root";
$password="Riyaz$03";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Hello, world!</title>
  </head>
  <body style="background-color: #EFF5F5">
    <header>
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
                  <a class="nav-link" href="./P_search_pro.php" style="color: #ffc2d6">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Validate.php" style="color: #ffc2d6">Contibute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./compare_pro.php" style="color: #ffc2d6">Compare</a>
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
      <center>

        <!--Section: Design Block-->
        <section>
          <!-- Intro -->
          <div id="intro" class="bg-image vh-100"  width="50em"   >
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
                        <img class="d-block" src="https://www.aresgalaxy.org/wp-content/uploads/2022/10/Tiny-Tinas-Wonderlands-on-laptop.jpg" height="540em" width="100%" width="500em" alt="First slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://cdn.wccftech.com/wp-content/uploads/2019/06/AMD-Ryzen-5-3600-6-Core-7nm-Zen-2-CPU-Benchmarks-Leak_1.png" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://i.pinimg.com/originals/51/da/5b/51da5bd756fae0ba7cb7f766b51f67f0.jpg" width="100%" alt="Second slide" height="540em">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://www.top10esports.com/wp-content/uploads/2019/11/phones2.jpg" width="100%" height="540em" alt="Third slide">
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
                      <span class="carousel-control-prev-icon" ></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Intro -->
            </section>
          </center>
            <!--Section: Design Block-->
          </header>




          <center>
          <img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
              <div class="container-fluid" style="height:300px;">
              <form action="../pages/compare_res.php" method="POST">
                <div >
                <div class="row border" style='margin-left:430px;height:50px;width:900px '>
              <div class="form-floating col-sm-4 ms-5" >
              <!-- <label for="floatingSelect" >Select the Catogery</label> -->
                    <select  style="width:300px; height:50px; margin-left:-35%; " class="form-select " name="mobile_name_1" aria-label="Floating label select example">
                                  <option></option>
                                  <?php 
                                  $query = "SELECT * FROM mobiles_details";
                                  $result1 = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result1)):; ?>
                                <option name="formSearch">  <?php echo $row[0]; ?>  </option>
                                <?php endwhile; ?>  

                    </select><br>
              </div>
              <div class="form-floating col-sm-4 ms-5" style="height:10px">
                    <select  style="width:300px; height:50px;" class="form-select" name="mobile_name_2" aria-label="Floating label select example">
                                  <option></option>
                                  <?php 
                                  $query = "SELECT * FROM mobiles_details";
                                  $result1 = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result1)):; ?>
                                <option name="formSearch">  <?php echo $row[0]; ?>  </option>
                                <?php endwhile; ?>  

                    </select><br>
                    <!-- <label for="floatingSelect" >Select the Catogery</label> -->
                    
                  </div>
                  </div>
                  </div>
              </form>
              </div>
          </center>
          


          
          
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  
</html>