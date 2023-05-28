<?php
$server_name="localhost";
$user_name="root";
$password="Mandarapu@12";
$database_name="nanoReview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
// $result1 = mysqli_query($conn, $query);
// $result2 = mysqli_query($conn , $query);

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
  <body style="background-color:#A7BBC7">
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
    <center>
        <!-- Mobile( bars )-->
        <!-- <div class='container shadow my-5 p-5 'style="background-color:#E1E5EA;"> -->
            <div class='container shadow my-5 p-5 'style="background-color:#E1E5EA;">
                <h1>Add a Review</h1>
    <div class="container shadow my-5 p-5 " style="background-color:#A7BBC7">
        <form action="form_processor.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control btn rounded-pill border-0 pr-5 py-2" name="Name" style="height:50px" id="floatingInput" required placeholder="Name">
        </div><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" name="Performance" id="floatingInput" required rows="3"  min='0' step='1' max='100'placeholder="CPU Performance">
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput" name="Gaming"  required rows="3"  min='0' step='1' max='100'placeholder="Gaming Performance">
            </div>
        </div><br><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" id="floatingInput" name="antutu_9"  required rows="3"  min='0' step='1' max='100'placeholder="ANTUTU 9">
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput"  name="geekbench_5" required rows="3"  min='0' step='1' max='100'placeholder="Geek Bench 5">
            </div>
        </div><br><br>
        <div class="row row-cols-2">
            <div class="col-auto ms-auto col-sm-3" style="margin-left:20%">
                <input type="number" class="form-control" id="floatingInput"  name="Battery_life" required rows="3"  min='0' step='1' max='100'placeholder="Battery Consumption">
            </div>
            <div class="col-auto ms-auto col-sm-3">
            <input type="number" class="form-control" id="floatingInput"  name="Review_Score" required rows="3"  min='0' step='1' max='100'placeholder="Review Score">
            </div>
            </div>
        </div><br><br>
        

        <h1>Somemore please</h1>
        <div class='container shadow my-5 p-5 ' style="background-color:#A7BBC7">
        <!-- <form action='form_mobile.php' method='post' > -->
        <!-- <input type='text' class='form-control' name='Name' style='height:50px' id='floatingInput' placeholder='Name'> -->
        <div class='form-floating mb-3'>
        </div><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='file' class='form-control' name='image' id='image' accept='.jpg, .jpeg, .png' id='floatingInput' required rows='3' placeholder='Image'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='number' class='form-control' id='floatingInput' name='Cores'  required rows='3' placeholder='no of cores'>
            </div>
        </div><br><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='text' class='form-control' id='floatingInput' name='Process'  required rows='3' placeholder='Processor in nm'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='text' class='form-control' id='floatingInput'  name='Memory_Type' required rows='3' placeholder='Memory Type'>
            </div>
        </div><br><br>
        <div class='row row-cols-2'>
            <div class='col-auto ms-auto col-sm-3' style='margin-left:20%'>
                <input type='text' class='form-control' id='floatingInput'  name='Storage_Type' required rows='3' placeholder='Storage Type'>
            </div>
            <div class='col-auto ms-auto col-sm-3'>
            <input type='text' class='form-control' id='floatingInput'  name='Gpu_Name' required rows='3' placeholder='Integrated GPU'>
            </div>
        </div><br><br>
    </div>
        <button type='submit' name='Final_Submit' class='btn btn-outline-success' style='width:60%'> <br> <h4> Submit </h4><br></button>
            </center>
        </form>
     <?php
    if(isset($_POST['Final_Submit'])){

        // echo var_dump($_POST);
        $product_name=$_POST['Name'];
        $performance=$_POST['Performance'];
        $gaming=$_POST['Gaming'];
        $Antutu_9=$_POST['antutu_9'];
        $Battery=$_POST['Battery_life'];
        $GeekBench_5=$_POST['geekbench_5'];
        $review_score=$_POST['Review_Score'];

        $query = "INSERT INTO processor_details(processor_name,cpu_performance,gaming_performance,antutu_9,geekbench_5,battery_life,total_score)
                VALUES ('$product_name',$performance,$gaming,$Antutu_9,$GeekBench_5,$Battery,$review_score)";
        $result=mysqli_query($conn,$query);
        if($result){
            // echo"
            // <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            // <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            // <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            //     <span aria-hidden='true'>&times;</span>
            // </button>
            // </div>
            // ";
        }



        // $product_name = $_POST['Name'];
        // $Ram=$_POST['RAM'];
        $Cores=$_POST['Cores'];
        $Process=$_POST['Process'];
        // $Graphic_Processor=$_POST['Graphic_Processor'];
        $Memory_Type = $_POST['Memory_Type'];
        // $Display_Size=$_POST['Display_Size'];
        $Storage_Type = $_POST['Storage_Type'];
        // $Screen_Resolution=$_POST['Screen_Resolution'];
        $Gpu_Name = $_POST['Gpu_Name'];
        if($_FILES["image"]["error"]==4){
            echo
            "<script>  alert('Image Does Not Exist'); </script>";
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];
        
            $validImageExtension = ['jpg', 'jpeg', 'png','gif'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            // if ( !in_array($imageExtension, $validImageExtension) ){
            //   echo
            //   "
            //   <script>
            //     alert('Invalid Image Extension');
            //   </script>
            //   ";
            // }
            if($fileSize > 1000000){
              echo
              "
              <script>
                alert('Image Size Is Too Large');
              </script>
              ";
            }
            else{
                // $nuewImageName =uiqid();
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, '../images/processors/' . $newImageName);
                // mobile_name,performance,display,battery,camera,connectivity,total_score
                $query="INSERT INTO processor_image(processor_name,cores,process,memory_type,storage_type,gpu_name,processor_image) VALUES
                         ('$product_name','$Cores','$Process','$Memory_Type','$Storage_Type','$Gpu_Name','$newImageName')";
                mysqli_query($conn,$query);
                echo
                    "
                    <script>
                        alert('Successfully Added');
                        document.location.href = './admin.php';
                    </script>
                    ";
            }
        // echo $Name.
        // $Performance.
        // $Display.
        // $Battery.
        // $gaming.
        // $Connectivity.
        // $Review_Score."\n".var_dump($_POST);
    }

    }

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>










