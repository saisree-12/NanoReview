<?php
$server_name="localhost";
$user_name="root";
$password="Riyaz$03";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
// $result1 = mysqli_query($conn, $query);
// $result2 = mysqli_query($conn , $query);

?>



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Bootstrap font icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                  <a class="nav-link" href="./P_search_pro.php" style="color: #ffc2d6">Processors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Validate.php" style="color: #ffc2d6">Contibute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" style="color: #ffc2d6">Comapre</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="./About_us.html" style="color: #ffc2d6">About Us</a>
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
        </nav><!-- Carousal  -->
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
                    </ol>
                    <div class="carousel-inner" style="min-height: 50vh; background-position: center; background-size: cover; position: relative;">
                      <div class="carousel-item active">
                        <img class="d-block" src="https://www.91-cdn.com/hub/wp-content/uploads/2022/08/best-gaming-phones-across-price-ranges-feat.png" width="100%" height="540em" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://fdn.gsmarena.com/imgroot/reviews/21/asus-rog-phone-5/inline/-1200/gsmarena_022.jpg" width="100%" alt="Second slide" height="540em">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2022/04/Screenshot_2022-04-07-12-28-09-598_com.google.android.youtube.jpg?fit=1920%2C1080&ssl=1" width="100%" height="540em" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://assets.mspimages.in/wp-content/uploads/2021/04/Best-Gaming-Smartphones-in-India.png" height="540em" width="100%" alt="Fourth slide">
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
<!-- carousel -->







<!-- Fetch to display the features --> 
<center>
<img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
<!-- <div class="container-fluid" style="width: 500px; height:300px;"> -->
<form action="../pages/search_res.php" method="POST">
<div class="form-floating " >
<select  style="width:300px;" class="form-select" name="mobile_name" aria-label="Floating label select example">
              <!-- <option></option> -->
              <?php 
              $query = "SELECT * FROM Mobiles";
              $result1 = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result1)):; ?>
            <option name="formSearch">  <?php echo $row[0]; ?>  </option>
            <?php endwhile; ?>  
            </select><br>
      <label for="floatingSelect" style="left:45%; position:absolute;">Choose the Mobile</label><br><br>
      <button type="submit"  name="fetch" class="btn btn-outline-success ">Fetch</button> 

    </div>
</form>
</center>
<!-- </div> -->
<!-- Fetch to display the features --> 




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html> 