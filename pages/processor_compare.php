<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoreview";
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
  <body >
    <header>
        <!-- Navbar -->
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
      <center>

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
                        <img class="d-block" src="https://www.club386.com/wp-content/uploads/2022/03/amd-feature-3.jpg" height="540em" width="100%" width="500em" alt="First slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://www.pcworld.com/wp-content/uploads/2022/11/cpu-hub-100758206-orig.jpg?quality=50&strip=all&w=1024" width="100%"  height="540em" alt="Fifth slide">
                      </div>
                      <!-- <div class="carousel-item ">
                        <img class="d-block" src="https://www.apple.com/105/media/us/macbook-pro-13/2020/f2b14406-42ad-405e-bfa0-71b52a0bfd67/anim/hero/large.mp4" width="100%"  height="540em" alt="Fifth slide">
                      </div> -->
                      <div class="carousel-item">
                        <img class="d-block" src="https://images6.alphacoders.com/456/thumb-1920-456498.jpg" width="100%" alt="Second slide" height="540em">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://cdn.cgmagonline.com/wp-content/uploads/2022/07/hardware-reviews-z690-aorus-elite-ax-intel-gaming-motherboard-review-2-1280x720.jpg" width="100%" height="540em" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://c4.wallpaperflare.com/wallpaper/564/220/928/intel-cpu-wallpaper-preview.jpg" height="540em" width="100%" width="500em" alt="Fourth slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="https://www.datasciencecentral.com/wp-content/uploads/2022/04/AdobeStock_408036566.jpg" height="540em" width="100%" width="500em" alt="Fifth slide">
                      </div>
                      <div class="carousel-item ">
                        <img class="d-block" src="https://pbs.twimg.com/media/E-sF5oiWEAcZW13.jpg" width="100%"  height="540em" alt="Fifth slide">
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
          </center>
            <!--Section: Design Block-->
          </header>




          <center>
          <img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
          <br><br>
              <div class="container-fluid " style="height:220px;">
              <form action="processor_compare.php" method="POST">
                <div class='container'>
              <div class="row  " style='margin-left:55px;height:50px;width:900px ;'>
              <div class="form-floating col-sm-6  ms-5" >
              <!-- <label for="floatingSelect" >Select the Catogery</label> -->
                    <select  style="width:300px; height:50px; margin-left:-25%; " class="form-select " name="name_1" aria-label="Floating label select example">
                                  <option></option>
                                  <?php 
                                  $query = "SELECT * FROM processor_details";
                                  $result1 = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result1)):; ?>
                                <option name="formSearch">  <?php echo $row[0]; ?>  </option>
                                <?php endwhile; ?>  

                    </select><br>
              </div>
              <div class="form-floating col-sm-4 ms-5" style="height:10px">
                    <select  style="width:300px; height:50px;" class="form-select" name="name_2" aria-label="Floating label select example">
                                  <option></option>
                                  <?php 
                                  $query = "SELECT * FROM processor_details";
                                  $result1 = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result1)):; ?>
                                <option name="formSearch">  <?php echo $row[0]; ?>  </option>
                                <?php endwhile; ?>  

                    </select><br>
                    <!-- <label for="floatingSelect" >Select the Catogery</label> -->
              </div>

            </div>
            <!-- <center> -->
              <button type="submit"  name="fetch" class="btn btn-outline-success my-5 " style=" margin-right:28px;">Fetch</button> 
            <!-- </center> -->
                  </div>
              </form>
              </div>
          </center>
          


          
          
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Navbar -->


<!-- image and features -->
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
            <?php
          if(isset($_POST["fetch"])){ 
            if($_POST["name_1"]=="" || $_POST["name_2"]==""){
              header("Location:laptop_compare.php");
            }

            // echo $row1[2];
            $query1= "SELECT processor_details.processor_name, processor_image.processor_image, processor_details.cpu_performance, processor_details.gaming_performance, processor_details.antutu_9, processor_details.geekbench_5, processor_details.battery_life, processor_details.total_score, processor_image.processor_name, processor_image.cores, processor_image.process, processor_image.memory_type, processor_image.storage_type, processor_image.gpu_name FROM processor_details,processor_image 
            WHERE processor_details.processor_name = processor_image.processor_name AND processor_details.processor_name = '$_POST[name_1]'";
            // $query1 = "SELECT  laptop_details.laptop_name , laptop_image.laptop_image, laptop_details.performance , laptop_details.gaming , laptop_details.display , laptop_details.battery_life , laptop_details.connectivity , laptop_details.total_score , laptop_image.laptop_name ,  laptop_image.processor ,  laptop_image.ram ,  laptop_image.graphic_processor ,  laptop_image.display_size ,  laptop_image.screen_resolution  FROM  laptop_details,laptop_image 
            // WHERE  laptop_details.laptop_name = laptop_image.laptop_name AND  laptop_details.laptop_name = '$_POST[name_1]'" ;
            // $query1 = "SELECT  laptop_image.laptop_name ,laptop_image.processor,laptop_image.ram,lat, laptop_image.graphic_processor ,  laptop_image.display_size ,  laptop_image.screen_resolution ,  laptop_image.laptop_image ,  Laptops.Connectivity ,  Laptops.Review_Score  FROM  Laptop_details,laptop_image WHERE  Laptops.Laptop_Names = l_des_img.Laptop_Names AND  Laptops.Laptop_Names = '$_POST[name_1]'" ; 
            // $query="SELECT * FROM m_des_img WHERE Mobile_Names='$_POST[mobile_name]'"; 
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);
            // echo "row1\n".var_dump($row1);
            $query2= "SELECT processor_details.processor_name, processor_image.processor_image, processor_details.cpu_performance, processor_details.gaming_performance, processor_details.antutu_9, processor_details.geekbench_5, processor_details.battery_life, processor_details.total_score, processor_image.processor_name, processor_image.cores, processor_image.process, processor_image.memory_type, processor_image.storage_type, processor_image.gpu_name FROM processor_details,processor_image 
            WHERE processor_details.processor_name = processor_image.processor_name AND processor_details.processor_name = '$_POST[name_2]'";
            // $query2 = "SELECT  laptop_details.laptop_name , laptop_image.laptop_image, laptop_details.performance , laptop_details.gaming , laptop_details.display , laptop_details.battery_life , laptop_details.connectivity , laptop_details.total_score , laptop_image.laptop_name ,  laptop_image.processor ,  laptop_image.ram ,  laptop_image.graphic_processor ,  laptop_image.display_size ,  laptop_image.screen_resolution  
            // FROM  laptop_details,laptop_image WHERE  laptop_details.laptop_name = laptop_image.laptop_name AND  laptop_details.laptop_name = '$_POST[name_2]'" ;
            // $query2 = "SELECT  l_des_img.Laptop_Names , l_des_img.Img_Col , l_des_img.Processor_Name , l_des_img.Ram , l_des_img.Graphic_Processor , l_des_img.Screen_Size , l_des_img.Screen_Resolution ,  Laptops.Performance ,  Laptops.Gaming ,  Laptops.Display ,  Laptops.Battery Life ,  Laptops.Connectivity ,  Laptops.Review_Score  FROM  Laptops,l_des_img WHERE  Laptops.Laptop_Names = l_des_img.Laptop_Names AND  Laptops.Laptop_Names = '$_POST[name_2]'" ;
            $res2=mysqli_query($conn,$query2);
            $row2=mysqli_fetch_array($res2);
            // echo $row1;
            // echo $row1[1]."\n";
            // echo "../images/laptops/$row1[1]";
              // echo "<div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
              // <div class='container col-sm-1 p-2 ' ><img src='../images/laptops/$row1[1]' alt='Image1' style='width:500px ; height:550px; margin-top:30%;'></div>
              // <div class='container col-sm-4 mt-5 pt-5 ps-5 ms-5 me-5 p-0 ' style='width:500px; height:500px;'><p class='text-center h2'><i><strong>$row1[0]</strong></i></p>

              // <div class='container shadow p-5 m-5' style='width:140%;' >

              // echo "<div class=' row container-fluid  ' style='width:90%; margin-top:6%;'>
              // <div class='container border col-auto p-3' style='width:500px; height:350px; position:absolute; margin-left:300px; margin-top:6%;' ><img src='../images/laptops/$row1[1]' alt='Image' style='width:100%; height:100%;'></div>
              // <div class='container col-sm-4  ' style='width:500px; height:500px;'><p class=' h2 w-100' style='margin-left:80%; margin-top:9%; '><i><strong>$row1[0]</strong></i></p>

              // <div class='conatiner shadow p-5' style='width:140%; margin-left:60%; position:absolute; margin-top:9%;' >
              echo "<div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
                            <div class='container  col-auto p-3' style='width:500px; height:350px; position:absolute; margin-left:100px; margin-top:6%;' ><img src='data:image;base64,".base64_encode($row1['processor_image'])."' alt='Image' style='width:100%; height:100%;'></div>
              <div class='container col-sm-4  ' style='width:500px; height:500px;'><p class=' h2 w-100' style='margin-left:53%; margin-top:9%; '><i><strong>$row1[0]</strong></i></p>
              
              <div class='conatiner shadow p-5' style='width:170%; margin-left:50%; position:absolute; margin-top:9%;' >
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;No of Cores : </strong></i> $row1[9] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Processor(nm) :</strong></i> $row1[10] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Memory Type :</strong></i> $row1[13] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Storage Type : </strong></i>$row1[12] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;GPU :</strong></i> $row1[11] </p>
              </div>
              </div>
              <div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
                            <div class='container  col-auto p-3' style='width:500px; height:350px; position:absolute; margin-left:100px; margin-top:6%;' ><img src='data:image;base64,".base64_encode($row2['processor_image'])."' alt='Image' style='width:100%; height:100%;'></div>
              <div class='container col ' style='width:650px; height:500px;'>
                <p class=' h2 w-50 my-5' style='margin-left:60%; margin-top:9%; '>
                    <i><strong>$row2[0]</strong></i>
                    </p>
                    </div>
                    
                    <div class='conatiner shadow p-5' style='width:53%; margin-left:45%; position:absolute; margin-top:9%;' >
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;No of Cores : </strong></i> $row2[9] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Processor(nm) :</strong></i> $row2[10] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Memory Type :</strong></i> $row2[13] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Storage Type : </strong></i>$row2[12] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;GPU :</strong></i> $row2[11] </p>
              </div>
              </div> ";

            //   $query1 = "SELECT * FROM  Laptops WHERE Mobile_Names = '$_POST[mobile_name]'";   
            
            // $result1 = mysqli_query($conn,$query1);
            // $rows=mysqli_fetch_array($result1);


         echo "
         
         <div class='container rounded-pill  shadow p-5' style='width:3000px; height:1000px; margin-top:8%; margin-bottom:8%;margin-left:15%'>
         <center><p class='h2 mt-2'> <strong><i>Overall Review</i></strong></p></center>
         <div class='container m-5 p-2 ' style='width: 400px;'>
        <div class=''>
          <div class='row'>
          <div class=' col-auto progress' style='width:30px; background-color: #497174;'>
          </div>
          <div class='col-auto h5'><b>$row1[0]</b></div>
          
          </div>
        </div>
        <div class=''>
          <div class='row'>
          <div class=' col-auto progress ' style='width:30px; background-color:#EB6440'>
          </div>
          <div class='col-auto h5'><b>$row2[0]</b></div>
          </div>
        </div>
      </div>




        <div class='container   my-3 p-4' style='width:900px; height:750px; '>

        
         <div class='row row-cols-3'>
            <div class='col-auto ms-auto w-25'>
            <br>
                <p class=' h4'><i><strong>CPU </strong></i>
            </div>
            <div class='col-auto ms-auto '>
              <div class='row'>
                <p class='h5'>$row1[2] % &nbsp;</p>
              </div>
              <div class='row'>
                <p class='h5'>$row2[2] % &nbsp;</p>
              </div>
            </div>

            <div class='col col-md-8'>
              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[2]%; background-color: #497174'>
                      $row1[2] % 
                  </div>
                </div>
              </div>

              <br>

              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar   rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[2]%; background-color:#EB6440''>
                    $row2[2] % 
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br><br>
            
      <div class='row row-cols-3'>
      <div class='col-auto ms-auto w-25 '>
      <br>
          <p class='h4'><i><strong>Gaming</strong></i>
      </div>

      <div class='col-auto ms-auto '>
        <div class='row'>
          <p class='h5'>$row1[3] % &nbsp;</p>
        </div>
        <div class='row'>
          <p class='h5'>$row2[3] % &nbsp;</p>
        </div>
      </div>

      <div class='col col-md-8'>
        <div class='row'>
          <div class='progress text-center' style='width: 100%; height:50%; ' >
            <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[3]%; background-color: #497174'>
                $row1[3] % 
            </div>
          </div>
        </div>

        <br>

        <div class='row'>
          <div class='progress text-center' style='width: 100%; height:50%; ' >
            <div class='progress-bar   rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[3]%; background-color:#EB6440''>
              $row2[3] % 
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br>

<div class='row row-cols-3'>
            <div class='col-auto ms-auto w-25 '>
            <br>
                <p class='h4'><i><strong>ANTUTU 9</strong></i>
            </div>

            <div class='col-auto ms-auto '>
              <div class='row'>
                <p class='h5'>$row1[4] % &nbsp;</p>
              </div>
              <div class='row'>
                <p class='h5'>$row2[4] % &nbsp;</p>
              </div>
            </div>

            <div class='col col-md-8'>
              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[4]%; background-color: #497174'>
                      $row1[4] % 
                  </div>
                </div>
              </div>

              <br>

              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar   rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[4]%; background-color:#EB6440''>
                    $row2[4] % 
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br><br>

      <div class='row row-cols-3'>
            <div class='col-auto ms-auto  w-25'>
            <br>
                <p class='h4'><i><strong>GeekBench 5</strong></i>
            </div>

            <div class='col-auto ms-auto '>
              <div class='row'>
                <p class='h5'>$row1[5] % &nbsp;</p>
              </div>
              <div class='row'>
                <p class='h5'>$row2[5] % &nbsp;</p>
              </div>
            </div>

            <div class='col col-md-8'>
              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[5]%; background-color: #497174'>
                      $row1[5] % 
                  </div>
                </div>
              </div>

              <br>

              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar   rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[5]%; background-color:#EB6440''>
                    $row2[5] % 
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br><br>

      <div class='row row-cols-3'>
            <div class='col-auto ms-auto w-25'>
            <br>
                <p class='h4'><i><strong>Battery life</strong></i>
            </div>

            <div class='col-auto ms-auto '>
              <div class='row'>
                <p class='h5'>$row1[6] % &nbsp;</p>
              </div>
              <div class='row'>
                <p class='h5'>$row2[6] % &nbsp;</p>
              </div>
            </div>

            <div class='col col-md-8'>
              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[6]%; background-color: #497174'>
                      $row1[6] % 
                  </div>
                </div>
              </div>

              <br>

              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar   rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[6]%; background-color:#EB6440''>
                    $row2[6] % 
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br><br>

      <div class='row row-cols-3'>
            <div class='col-auto ms-auto w-25 '>
            <br>
                <p class='h4'><i><strong>Review Score</strong></i>
            </div>

            <div class='col-auto ms-auto '>
              <div class='row'>
                <p class='h5'>$row1[7] % &nbsp;</p>
              </div>
              <div class='row'>
                <p class='h5'>$row2[7] % &nbsp;</p>
              </div>
            </div>

            <div class='col col-md-8'>
              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[7]%; background-color: #497174'>
                      $row1[7] % 
                  </div>
                </div>
              </div>

              <br>

              <div class='row'>
                <div class='progress text-center' style='width: 100%; height:50%; ' >
                  <div class='progress-bar  rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row2[7]%; background-color:#EB6440'>
                    $row2[7] % 
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br><br>
                  
        </div> 
        

        </div>
        ";
  
        }
            ?>
        <!-- </form> -->
<!-- image and featires -->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>