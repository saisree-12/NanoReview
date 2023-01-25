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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM mobile_image")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["mobile_name"]; ?></td>
        <td> <img src="../images/mobiles/<?php echo $row["mobile_image"]; ?>" width = 200> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="../pages/form_laptop .php">Upload Image File</a>
  </body>
</html>