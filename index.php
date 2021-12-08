<?php

$images = array('image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg', 'image7.jpg', 'image8.jpg', 'image9.jpg', 'image10.jpg');

$names = array('ARIFUL ISLAM', 'RZ HERU', 'MOKADDESH ALI', 'MOSADDEK BILLA', 'M.R SHAWON', 'TASRIF SEEZAN', 'ARIFUL HASAN', 'MINNATUL HASAN', 'MIR SHONDHI', 'NIKHIL CHANDRO');

$ids = array('1802120', '1802171', '1802156', '1802167', '1802161', '1802138', '1802131', '1802151', '1802133', '1802149');

$dept = array('ECE', 'ECE', 'ECE', 'ECE', 'ECE', 'ECE', 'ECE', 'ECE', 'ECE', 'ECE');

?>

<!doctype html>
<html lang="en">
  <head>
    <title>PHP Assignment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div class="container">
        <div class="heading mb-5">
            <h2 class="pt-5">HAJEE MOHAMMAD DANESH SCIENCE & TECHNOLOGY UNIVERSITY, DINAJPUR 5200</h2>
            <h3 class="ece justify-content-center text-center">Department of Electronics and Communication Engineering</h3>
        </div>
    </div>
    <section class="main-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 hover15">
            <?php
            for ($i = 0; $i < count($names); $i++) { ?>

            <div class="row single-row py-3 spread-shadow figure">
              <div class="col-5  ">
                <img src="<?php echo './images/' . $images[$i]; ?>" alt="" class="img-fluid">
              </div>
              <div class="col-7 pt-5">
                <h3><b>Name: </b><?php echo $names[$i]; ?> </h3>
                <h3><b>Student ID: </b><?php echo $ids[$i]; ?> </h3>
                <h3><b>Department: </b><?php echo $dept[$i]; ?></h3>
              </div>
            </div>
             <?php } ?>
          </div>
        </div>
      </div>
    </section>



    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>