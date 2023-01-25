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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Hello, world!</title>
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
                  <a class="nav-link" href="./laptops.php" style="color: #ffc2d6">Laptops</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./mobiles.php" style="color: #ffc2d6">Mobiles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./processors.php" style="color: #ffc2d6">Processors</a>
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
        </nav>
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
                        <img class="d-block" src="https://factschronicle.com/wp-content/uploads/2020/08/AMD-Ryzen.jpg" width="100%" height="540em" alt="First slide">
                      </div>
                  
                      <div class="carousel-item">
                        <img class="d-block" src="https://wallpapercave.com/wp/wp9895189.jpg" width="100%" height="540em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://s.ek.ua/posts/files/3812/wide_pic.jpg" width="100%" height="540em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://cdn.wccftech.com/wp-content/uploads/2017/06/AMD-Ryzen-Pro-Enterprise-Processor-Launch_1.jpg" width="100%" height="540em" height="540em" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://images.news18.com/ibnlive/uploads/2021/03/1614852308_redmi_note_10_pro_max_processor.jpg" width="100%" height="540em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://i0.wp.com/reportwire.in/wp-content/uploads/2022/11/OnePlus-to-Samsung-All-upcoming-phones-expected-to-sport-the.jpg?fit=1200%2C667&ssl=1" width="100%" height="540em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://www.hardwaretimes.com/wp-content/uploads/2020/07/AMD_Ryzen_3rd_Gen_Technology1.jpg" width="100%" height="540em" alt="Second slide" height="540em">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://static.toiimg.com/photo/msid-92520064/92520064.jpg" width="100%" height="540em" alt="Fourth slide">
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
<form action="../pages/P_search_res.php" method="POST">
<div class="form-floating " >
<select  style="width:300px; height:50px;" class="form-select" name="processor_name" aria-label="Floating label select example">
              <option></option>
              <?php 
              $query = "SELECT * FROM p_des_img";
              $result1 = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result1)):; ?>
            <option name="formSearch">  <?php echo $row[0]; ?>  </option>
            <?php endwhile; ?>  
            </select><br>
      <!-- <label for="floatingSelect" style="left:44%; position:absolute;">Select the Catogery</label> -->
      <button type="submit"  name="fetch" class="btn btn-outline-success my-5 ">Fetch</button> 

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