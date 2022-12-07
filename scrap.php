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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    

    <title>Hello, world!</title>
  </head>


  <!-- Background-Image -->
  <!-- <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white">          
        </div>
      </div>
    </div>
  </div> -->


  <!-- <div
  class="bg-image"
  style="
    background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.webp');
    height: 100vh;
  "
></div> -->
  <!-- Background-Image -->


  

  <body >
  
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" style="background-color:#fff5e481">
        <div class="container">
          <a class="navbar-brand" href="#!"><span style="color: #06ede2;">Nano</span><span style="color: rgb(207, 21, 21);">Review</span></a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Laptops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Mobiles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Tablets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Contribute</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#!" style="color: #850E35">Compare</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!" style="color: #850E35">Contact</a>
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



<!-- image and features -->
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
            <?php
          if(isset($_POST["fetch"])){ 
            if($_POST["mobile_name"]==""){
              header("Location:search_pro.php");
            }
            $query="SELECT * FROM m_des_img WHERE Mobile_Names='$_POST[mobile_name]'"; 
            $res=mysqli_query($conn,$query);
            $row=mysqli_fetch_array($res);
              echo "<div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
               <div class='container col-sm-1 p-3 ' ><img src='data:image;base64,".base64_encode($row[1])."' alt='Image' style='width:500px ; height:550px;'></div>
              <div class='container col-sm-4 mt-5 pt-5 ps-5 ms-5 me-5 p-0 ' style='width:500px; height:500px;'><p class='text-center h2'><i><strong>$row[0]</strong></i></p>

              <div class='card shadow p-5 m-5' style='width:140%;' >
                        
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp; ROM :</strong></i> $row[2] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span
                        >&#10003;</span> &nbsp;&nbsp;Processor :</strong></i> $row[3] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Rear Camera :</strong></i> $row[4] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Front Camera : </strong></i>$row[5] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Display :</strong></i> $row[6] </p>
              </div>
              </div>
              </div>";

              $query1 = "SELECT * FROM Mobiles WHERE Mobile_Names = '$_POST[mobile_name]'";   
            
            $result1 = mysqli_query($conn,$query1);
            $rows=mysqli_fetch_array($result1);
         echo "<div class='container p-5 my-5' style='width:1200px; height:500px '>
         <p class='h3' style='margin-left:40%;'> <strong><i>Overall Review</i></strong></p>
         <div class='container shadow my-5 p-5'>
                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong> Performance &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[1]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[1]%'>
                  $rows[1] %
                  </div> 
                  </div>
                  </div>

                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Display &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[2]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[2]%'>
                  $rows[2] %
                  </div> 
                  </div>
                  </div>

                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Battery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[3]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[3]%'>
                  $rows[3] %
                  </div> 
                  </div>
                  </div>

                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[4]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[4]%'>
                  $rows[4] %
                  </div> 
                  </div>
                  </div>


                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong> Connectivity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[5]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[5]%'>
                  $rows[5] %
                  </div> 
                  </div>
                  </div>


                  <div class='row'>
                  <div class=' h4 col-sm-4' style='margin-left:5%; position:relative;' ><i><strong> Review Score &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows[6]%</div>
                  <div class='text-center progress' style='width: 30%;  margin-top:9px; position:absolute; '>
                  <div class='progress-bar bg-success rounded-pill border-success ' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:$rows[6]%'>
                  $rows[6] %
                  </div> 
                  </div>
                  </div>


                
                </div> 
                </div>";
              
        }
            ?>
        <!-- </form> -->
<!-- image and featires -->


<!-- <div class='container p-3 ' style='width:25% ; height:550px; margin-left:15%;'><img src='data:image;base64,".base64_encode($row[1])."' alt='Image' style='width:80% ; height:550px; margin-left:8%;'></div> -->








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>