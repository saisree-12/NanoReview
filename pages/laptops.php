<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
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
    
    <title>Hello, world!</title>
</head>
<body style="background-color:#FDFAF6">
      <center>
  <header>
        <!-- Navbar -->
       
        <!-- Navbar --> <!-- Navbar -->
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

        <!--Section: Design Block-->
        <section >
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
                      <!-- <div class="carousel-item ">
                        <img class="d-block" src="https://www.apple.com/105/media/us/macbook-pro-13/2020/f2b14406-42ad-405e-bfa0-71b52a0bfd67/anim/hero/large.mp4" width="100%"  height="540em" alt="Fifth slide">
                      </div> -->
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
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
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
            <!--Section: Design Block-->
        </header>
        <br>
        <img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
        <form action="laptops.php" method="post">
        <select class="form-select" aria-label="Default select example" style="background-color:#FDFAF6" name="option">
            <option selected>Open this select menu</option>
            <?php
            $query = "SELECT * FROM laptop_details";
            $result1 = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_array($result1)):; ?>
            <option name="option">  <?php echo $row[0]; ?>  </option>
            <?php endwhile; ?>  
            <php?
              echo var_dump($row);
              ?>
        </select>
        <br>
        <button type="submit"  name="fetch" class="btn btn-outline-success my-5 " style="width:20%">Fetch</button> 
        </form>
        
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  
    <?php
    if(isset($_POST['fetch'])){
      // echo $_POST['option_mobile'];
    //   $selected= $_POST['option'];
      $query="SELECT * FROM laptop_image WHERE laptop_name='$_POST[option]'"; 
            $res=mysqli_query($conn,$query);
            $row=mysqli_fetch_array($res);
            // echo var_dump($row);
              echo "<br>  
              <div class='container row '>
              <div class='container col p-2' style='margin-left:10%;'><img src='data:image;base64,".base64_encode($row['laptop_image'])."' alt='Image' style='width:500px; margin-top:30%;'></div>
              <div class='container col mt-5 pt-5' style='width:60%; height:500px;margin-top:10%'><p class='text-center h2'><i><strong>$row[laptop_name]</strong></i></p>
            <br>
              <div class='container shadow p-5' style='width:150%; margin-left:100px; position:relative; margin-top:10%' >
                     
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;RAM : </strong></i> $row[3] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span
                        >&#10003;</span> &nbsp;&nbsp;Processor :</strong></i> $row[2] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Graphic Processor : </strong></i> $row[4] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Screen Resolution : </strong></i>$row[6] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Display Size :</strong></i> $row[5] </p>
              </div>
              </div>
              </div>";

              $query1 = "SELECT * FROM laptop_details WHERE laptop_name = '$_POST[option]'";   
            
            $result1 = mysqli_query($conn,$query1);
            $rows=mysqli_fetch_array($result1);
         echo "<div class='container shadow p-5' style='width:2000px; height:500px; margin-top:6%; margin-bottom:8%'>
         <p class='h2' style='margin-left:40%;'> <strong><i>Overall Review</i></strong></p>
         <div class='container  my-5 p-4' style='width:900px; height:300px '>
                  
         <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Performance</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[1] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[1]%'>
                $rows[1] % 
             </div>
           </div>
         </div>
       </div>


       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Gaming</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[2] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[2]%'>
                $rows[2] % 
             </div>
           </div>
         </div>
       </div>



       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Display</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[3] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[3]%'>
                $rows[3] % 
             </div>
           </div>
         </div>
       </div>




       <div class='row row-cols-3'>
         <div class='col-auto ms-auto'>
           <p class='h4'><i><strong>Battery Life</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[4] %</p>
         </div>
         <div class='col col-md-8 '>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[4]%'>
                $rows[4] % 
             </div>
           </div>
         </div>
       </div>





       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Connectivity</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[5] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[5]%'>
                $rows[5] % 
             </div>
           </div>
         </div>
       </div>






       <div class='row row-cols-3'>
         <div class='col-auto ms-auto  '>
           <p class='h4'><i><strong>Review Score</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$rows[6] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$rows[6]%'>
                $rows[6] % 
             </div>
           </div>
         </div>
       </div>

                  
                </div> 
                </div>";
              
        }
            ?>








  </body>
</html>