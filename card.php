<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="card.css">
    <script src="https://kit.fontawesome.com/94d8cc078f.js" crossorigin="anonymous"></script>
    <script src="script.js" defer async></script>
    <title>card</title>
  </head>
  <body>

  <div class="heading" id="heading">
            <h2 style="margin-bottom:4px;"><span><a href="index.php" style="margin-left:0;"><i class="fa fa-hand-o-left" aria-hidden="true"></i></a></span>
             STUDENT CARD GENERATOR
            <i class="fa fa-moon-o color-change" aria-hidden="true" id="black" onclick="chan()"></i>
            <i class="fa fa-sun-o color-change" aria-hidden="true" id="white" onclick="chan2()"></i>
            </h2>
    </div>

        <?php

                $serverName = "localhost";
                $username = "root";
                $password = "123456";
                $database = "student_card";
                $conn = mysqli_connect($serverName, $username, $password);
                $conn = mysqli_connect($serverName, $username, $password, $database);

                $ans = "SELECT * FROM details";
                $ans1 = mysqli_query($conn,$ans);


        ?>
         <div class='container mx-auto mt-4 card-cont'>
                         <div class='row'>
        <?php
                    foreach($ans1 as $val)
                     {
                         echo "
                             <div class='col-md-4'>
                             <div class='card' style='width: 18rem;'>
                             <img src='https://i.imgur.com/ZTkt4I5.jpg' class='card-img-top' >
                         <div class='card-body'> 
                         
                         <b><h3 class='card-title'>".$val['NAME']."</h3>
                         <h6 class='card-title'>".$val['REG']."</h6>
                         <h6 class='card-title'>".$val['SECTION']."</h6>
                         <h6 class='card-title'>".$val['MNUMBER']."</h6>
                         <h6 class='card-title'>".$val['Email']."</h6></b>
                       <a href='#' class='btn dwn'>Download</a>
                     </div>
                 </div>
                     </div>    
           
             ";
            }
            ?>
             </div>
             </div>




  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>