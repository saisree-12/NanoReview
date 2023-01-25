<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="image_insert.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="file" accept=".jpg, .jpeg, .png, .gif">
        <input type="text" name="name_img" value="hello">
        <input type="submit" name="submit" value="Save name">
    </form>
</body>
</html>
<?php
$server_name="localhost";
$user_name="root";
$password="Riyaz$03";
$database_name="nanoreview";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['submit'])){
    echo "Hello";
    // $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    // $image_name=$_POST['name_img'];
    // // $query="INSERT INTO testimg ('name','image') VALUES ($_POST['name_img'],$_POST['image'])";
    // // $query="INSERT INTO test_img (name,image) VALUES ($file,$image_name)";
    // $query="INSERT INTO `test_img` (`name`, `image`) VALUES (`$image_name`,`$file`)";
    // $query_run=mysqli_query($conn,$query);
    // if($query_run)
    // {
    //     echo '<script type="text/javascript">alert("Image uploaded")</script>';
    // }
    // else
    // echo '<script type="text/javascript">alert("Image not uploaded")</script>';


    $name=$_FILES['file']['name'];
    $target_dit="upload_images";
    $target_file=$target_dit.basename($_FILES["file"]["name"]);

    $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr=array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr)){
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dit.$name)){
            $image_base64 = base64_encode(file_get_contents('upload_images'.$name) );
       $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
            $query="insert into test_img2(name) values('".$image."')";
            mysqli_query($conn,$query);
        }
    }
}


// $sql = "select image from test_img2";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_array($result);

// $image = $row['name'];
// $image_src = "upload_images/".$image;

?>
<img src='<?php echo $image_src;  ?>' >