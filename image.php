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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>

<div class="bg"></div>

<p class="py-5 text-center">This example creates a full page background image. Try to resize the browser window to see how it always will cover the full screen (when scrolled to top), and that it scales nicely on all screen sizes.</p>

    <center>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php
            $query="SELECT * FROM image";
            $res=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_array($res)){
                echo "<div class='card shadow my-5' style='width:20% ; left:10%; height:60%; top:15%; position:fixed;' > <img src='data:image;base64,".base64_encode($row['img_col'])."' alt='Image' style='width:20% ; left:10%; height:60%; top:20.5%; position:fixed;'></div>";
            }
            ?>
        </form>
    </center>
    









<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>