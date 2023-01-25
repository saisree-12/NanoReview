<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Rating till now</title>
  </head>
  <body style="background-color:#A7BBC7">      <!-- Navbar -->
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
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffc2d6">
                      Compare
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="./laptop_compare.php">Laptops</a>
                      <a class="dropdown-item" href="./mobile_compare.php">Mobiles</a>
                      <a class="dropdown-item" href="./processor_compare.php">Processors</a>
                    </div>
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
    <!-- Navbar -->


<br><br><br><br><br><br><br><br>
    <div class="container shadow"style="background-color:#E1E5EA;" >
      <center>  <br><br>
        <p class="h2">Pick out your desired Choice and Proceed </p>
      </center><br><br><br>
        <div class="row row-cols-4" ><br>
            <div class="col-sm-auto ms-auto">
              <a href="./form_processor.php"><img src="https://media2.giphy.com/media/tZFXBoNU71sDit7npD/200.webp?cid=ecf05e47tjoryxndcxr2z7quh08sdac26nb9dkigo2n6ahrw&rid=200.webp&ct=s" ></img></a>
              <!-- <p class="h5">Mobiles</p> -->
            </div>
              <div class="col-sm-auto ms-auto ">
                <a href="./form_laptop.php"><img src="https://media0.giphy.com/media/WFZvB7VIXBgiz3oDXE/200w.webp?cid=ecf05e477y3bjmyziu2ikoieo9wg6y4iokbbyjjkxoddgjf1&rid=200w.webp&ct=s" ></img></a>
                <!-- <a href="#!"><img src="https://media1.giphy.com/media/l0MYGlG4YLB51v0bu/200w.webp?cid=ecf05e47vfj3e2ooltnzwv32y3pngexf3wlkaeait5mezoss&rid=200w.webp&ct=s" ></img></a> -->
                <!-- <a href="#!"><img src="https://media2.giphy.com/media/TEILCythSScYyaaEDK/200w.webp?cid=ecf05e47mim9e72cnh0gzp3m3y7ahoo8l5n1ybubjqag2uaf&rid=200w.webp&ct=s" ></img></a> -->
                <!-- <p class="h1">Laptops</p> -->
              </div>
              <div class="col-sm-auto ms-auto ">
              <!-- <a href="#!"><img src="https://media0.giphy.com/media/GmfLK2ViShbY8QpZKN/200w.webp?cid=ecf05e476tbfmufenbhghjncoqdv21imqxwv0bo0t40l0a0p&rid=200w.webp&ct=s" ></img></a> -->
              <!-- <a href="#!"><img src="https://cdn.dribbble.com/users/3873964/screenshots/14216267/media/fe34f0470ef7899cc9594a8c9f3f2cec.gif" ></img></a> -->
              <!-- <a href="#!"><img src="https://media2.giphy.com/media/Vh9I5zHeeAVTgk7iSK/200w.webp?cid=ecf05e47uk95igndk4erlxfoxlt54nxj90e8iiqnni4vyn5b&rid=200w.webp&ct=s" ></img></a> -->
              <!-- <a href="#!"><img src="https://media3.giphy.com/media/KeWveAogPhquNPahKv/giphy.webp?cid=ecf05e47uk95igndk4erlxfoxlt54nxj90e8iiqnni4vyn5b&rid=giphy.webp&ct=shttps://media3.giphy.com/media/KeWveAogPhquNPahKv/giphy.webp?cid=ecf05e47uk95igndk4erlxfoxlt54nxj90e8iiqnni4vyn5b&rid=giphy.webp&ct=s" ></img></a> -->
              <a href="./form_mobile.php"><img src="https://media3.giphy.com/media/SQTSmiJl0uKoZNdv1T/200w.webp?cid=ecf05e47hjtj65ovtmcc2mpzw8r63eu6qfzs09y2hhtlsbji&rid=200w.webp&ct=s" ></img></a>
                <!-- <a href="#!"><img src="https://media2.giphy.com/media/p6vVB4CBUdmpcJ0L9b/200w.webp?cid=ecf05e47pm5kz4jtk6nerm23mm2hngftl65s4yiafli3r0vl&rid=200w.webp&ct=s" ></img></a> -->
                <!-- <a href="#!"><img src="https://media3.giphy.com/media/KeWveAogPhquNPahKv/giphy.webp?cid=ecf05e47q7mxtiblgx4crfl1ls1cnk0pjl27s54yeyo69lnn&rid=giphy.webp&ct=s" ></img></a> -->
                <!-- <p class="h1">Processors</p> -->
            </div>
              <div class="col-sm-auto ms-auto ">
                <!-- <a href="#!"><img src="https://media0.giphy.com/media/0iaOrKy19Kh97NSMbw/200.webp?cid=ecf05e47arq5wqmm7fbcigx0bgq5h65un68d00y8pkmusuyd&rid=200.webp&ct=ts" ></img></a> -->
                <a href="./feedback_view.php"><img src="https://media3.giphy.com/media/J5SZEif3JXj4FFn9CT/200w.webp?cid=ecf05e47pj0aylbqgmm0z56svcbjm4dn6d6db8lnrg79rksr&rid=200w.webp&ct=s" ></img></a>
                <!-- <p class="h1">Feedback</p> -->
              </div>
        </div>
        <br><br><br><br><br>
    </div>




    </body>
    </html>