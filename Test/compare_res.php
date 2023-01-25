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


<!-- image and features -->
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
            <?php
          if(isset($_POST["fetch"])){ 
            if($_POST["mobile_name_1"]=="" || $_POST["mobile_name_2"]==""){
              header("Location:compare_pro.php");
            }



            $query1 = "SELECT  m_des_img.Mobile_Names , m_des_img.Img_Col , m_des_img.Rom , m_des_img.Processor , m_des_img.Rear_camera , m_des_img.Front_Camera , m_des_img.Display , Mobiles.Performance , Mobiles.Display , Mobiles.Battery , Mobiles.Camera , Mobiles.Connectivity , Mobiles.Review_Score  FROM Mobiles,m_des_img WHERE Mobiles.Mobile_Names = m_des_img.Mobile_Names AND Mobiles.Mobile_Names = '$_POST[mobile_name_1]'" ; 
            // $query="SELECT * FROM m_des_img WHERE Mobile_Names='$_POST[mobile_name]'"; 
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);

            $query2 = "SELECT  m_des_img.Mobile_Names , m_des_img.Img_Col , m_des_img.Rom , m_des_img.Processor , m_des_img.Rear_camera , m_des_img.Front_Camera , m_des_img.Display , Mobiles.Performance , Mobiles.Display , Mobiles.Battery , Mobiles.Camera , Mobiles.Connectivity , Mobiles.Review_Score  FROM Mobiles,m_des_img WHERE Mobiles.Mobile_Names = m_des_img.Mobile_Names AND Mobiles.Mobile_Names = '$_POST[mobile_name_2]'" ; 
            $res2=mysqli_query($conn,$query2);
            $row2=mysqli_fetch_array($res2);
              echo "<div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
              <div class='container col-sm-1 p-2 ' ><img src='data:image;base64,".base64_encode($row1['1'])."' alt='Image' style='width:500px ; height:550px; margin-top:30%;'></div>
              <div class='container col-sm-4 mt-5 pt-5 ps-5 ms-5 me-5 p-0 ' style='width:500px; height:500px;'><p class='text-center h2'><i><strong>$row1[0]</strong></i></p>

              <div class='container shadow p-5 m-5' style='width:140%;' >
                        
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;ROM : </strong></i> $row1[2] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Processor :</strong></i> $row1[3] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Rear Camera :</strong></i> $row1[4] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Front Camera : </strong></i>$row1[5] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Display :</strong></i> $row1[6] </p>
              </div>
              </div>
              </div>
              

              <div class=' row container-fluid  ' style='width:90%; margin-top:8%;'>
              <div class='container col-sm-1 p-2 ' ><img src='data:image;base64,".base64_encode($row2['1'])."' alt='Image' style='width:500px ; height:550px; margin-top:30%;'></div>
              <div class='container col-sm-4 mt-5 pt-5 ps-5 ms-5 me-5 p-0 ' style='width:500px; height:500px;'><p class='text-center h2'><i><strong>$row2[0]</strong></i></p>

              <div class='container shadow p-5 m-5' style='width:140%;' >
                        
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;ROM : </strong></i> $row2[2] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Processor :</strong></i> $row2[3] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Rear Camera :</strong></i> $row2[4] </p>
                        <p class='h4'style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Front Camera : </strong></i>$row2[5] </p>
                        <p class='h4' style='margin-left:0%;'><i><strong><span>&#10003;</span> &nbsp;&nbsp;Display :</strong></i> $row2[6] </p>
              </div>
              </div>
              </div> ";

            //   $query1 = "SELECT * FROM Mobiles WHERE Mobile_Names = '$_POST[mobile_name]'";   
            
            // $result1 = mysqli_query($conn,$query1);
            // $rows=mysqli_fetch_array($result1);
         echo "<div class='container rounded-9 shadow p-5' style='width:2000px; height:500px; margin-top:6%; margin-bottom:8%;'>
         <p class='h2' style='margin-left:40%;'> <strong><i>Overall Review</i></strong></p>
         <div class='container  my-5 p-4' style='width:900px; height:300px; '>
                  
         <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Performance</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[7] %</p>
         </div>
         <div class='col col-md-8'>

         <div class='row'>
         
         </div>

           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[7]%'>
                $row1[7] % 
             </div>
           </div>
         </div>
       </div>


       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Display</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[8] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[8]%'>
                $row1[8] % 
             </div>
           </div>
         </div>
       </div>



       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Battery</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[9] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[9]%'>
                $row1[9] % 
             </div>
           </div>
         </div>
       </div>




       <div class='row row-cols-3'>
         <div class='col-auto ms-auto'>
           <p class='h4'><i><strong>Camera</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[10] %</p>
         </div>
         <div class='col col-md-8 '>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[10]%'>
                $row1[10] % 
             </div>
           </div>
         </div>
       </div>





       <div class='row row-cols-3'>
         <div class='col-auto ms-auto '>
           <p class='h4'><i><strong>Connectivity</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[11] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[11]%'>
                $row1[11] % 
             </div>
           </div>
         </div>
       </div>






       <div class='row row-cols-3'>
         <div class='col-auto ms-auto  '>
           <p class='h4'><i><strong>Review Score</strong></i>
         </div>
         <div class='col-auto ms-auto '>
           <p class='h4'>$row1[12] %</p>
         </div>
         <div class='col col-md-8'>
           <div class='progress text-center' style='width: 100%; height:50%; ' >
             <div class='progress-bar bg-success rounded-pill' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:$row1[12]%'>
                $row1[12] % 
             </div>
           </div>
         </div>
       </div>

                  
                </div> 
                </div>";
              
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