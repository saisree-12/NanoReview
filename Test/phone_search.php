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
  <body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<center>
              <img src="https://media1.giphy.com/media/Ie7Wkvuhu1hp0rZZ3Q/200w.webp?cid=ecf05e476yycb6ngn9gcoc75a47jpdqp8dgmynaoabaiv6ak&rid=200w.webp&ct=s" ></img>
              <!-- <div class="container-fluid" style="width: 500px; height:300px;"> -->
                <form action="../pages/P_search_res.php" method="POST">
                  <div class="form-floating " >
                    <select  style="width:300px;height:50px" class="form-select" name="processor_name" aria-label="Floating label select example">
                      <option></option>
                      <?php 
              $query = "SELECT * FROM p_des_img";
              $result1 = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result1)):; ?>
            <option name="formSearch">  <?php echo $row[0]; ?>  </option>
            <?php endwhile; ?>  
            <button type="submit"  name="fetch" class="btn btn-outline-success my-5 " stule="position-fixed; left=60%;top=50%">Fetch</button>
          </select><br>
          <label for="floatingSelect">Select the Catogery</label><br><br>
          <!-- <button type="submit"  name="fetch" class="btn btn-outline-success ">Fetch</button>  -->
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>