<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/94d8cc078f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer async></script>
   
</head>
<body>
    <div class="container">

        <div class="heading" id="heading">
            
                <h2 style="margin-bottom:4px;">STUDENT CARD GENERATOR
                <i class="fa fa-moon-o color-change" aria-hidden="true" id="black" onclick="chan()"></i>
                <i class="fa fa-sun-o color-change" aria-hidden="true" id="white" onclick="chan2()"></i>
                </h2>
        </div>
        <?php
        $email = '';
        $register = '';
        $name = '';
        $contact = '';
        $section = '';
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'];
            $register = $_POST['reg'];
            $name = $_POST['name'];
            $contact = $_POST['mobile'];
            $section = $_POST['sect'];

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success</strong>  Student:  '."<b>".  "$name" ."</b>".' and Registration no:   '."<b>". "$register "."</b>". 'submitted successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        //submit to database
        //connection
        $serverName = "localhost";
        $username = "root";
        $password = "123456";

        $conn = mysqli_connect($serverName, $username, $password);
        if(!$conn)
        {
            die("connection was unsuccessful ".mysqli_connect_error() );
        }
        // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        // <strong>Connection was Successful</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //   <span aria-hidden="true">&times;</span>
        // </button>
    //   </div>';

      //create database
      $database = "student_card";
      $sql = "CREATE DATABASE $database";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
    //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>Database was connected Successfully'."<br>". '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div>';
      
      }
      else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Database creation unsuccessful ' . mysqli_error($conn) .'</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }

    // Create table in db using php
    $conn = mysqli_connect($serverName, $username, $password, $database);
    if(!$conn)
    {
        // die("connection was unsuccessful 2 ".mysqli_connect_error() );
    }
//     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>Connection was Successful 2</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';

    $sql1 = "CREATE TABLE details(`REG` INT(10), `NAME` VARCHAR(20), `Email` VARCHAR(20), `MNUMBER` VARCHAR(12), `SECTION` VARCHAR(20), PRIMARY KEY(`REG`))";
    $result = mysqli_query($conn,$sql1);


    if($result)
      {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>TABLE was created Successfully'."<br>". '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      
      }
      else{
    //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>TABLE created unsuccessful ' . mysqli_error($conn) .'</strong>
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div>';
      }

    //insert into table
    $sql1 = "INSERT INTO details(`REG`,`NAME`,`Email`,`MNUMBER`,`SECTION`) VALUES('$register','$name','$email','$contact','$section')";
    $result = mysqli_query($conn,$sql1);


    if($result)
      {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data inserted Successfully'."<br>". '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      
      }
      else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data insertion unsuccessful ' . mysqli_error($conn) .'</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      $ans = "SELECT * FROM details";
      $ans1 = mysqli_query($conn,$ans);

    ?>      
 
        <div class="upper">
            <h3 id="formHead">Student Details</h3>
            <hr>
            <form action="#"  method="post">
                <div class="form-group">
                    <!-- <label for="name">USER NAME</label> -->
                    <input  name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
                    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email address</label> -->
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <!-- <label for="pass">Password</label> -->
                    <input type="number" name="reg" class="form-control" id="reg" placeholder="Registeration">
                </div>
                <div class="form-group">
                    <!-- <label for="pass">Password</label> -->
                    <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Contact number">
                </div>
                <div class="form-group">
                    <!-- <label for="pass">Password</label> -->
                    <input type="text" name="sect" class="form-control" id="sect" placeholder="Section">
                </div>
                <button type="submit" onclick="generate()" class="btn btn-primary bn">Submit</button>
            </form>
        </div>
        <div class="lower" id="addcards">
            <h3 id="saveHead">&nbsp; &nbsp; &nbsp; Saved Students Cards &nbsp; &nbsp; <a href="card.php" style="margin-right:0; color:black;"><i class="fa fa-download" aria-hidden="true"></i></a></h3>
            <hr>
            <table class="table table table-striped">
            <tr style='color:black;text-align: center;'>
                    <th>REG.NO</th>
                    <th>NAME</th>
                    <th>SECTION</th>
                    <th>NUMBER</th>
                    <th>Email</th>
                </tr>
                <?php

                 
                     foreach($ans1 as $val)
                     {
                         echo" <b> <tr style='color:yellow;text-align: center; font-weight:400;'>
                                <td >".$val['REG']."</td>
                                <td>".$val['NAME']."</td>
                                <td>".$val['SECTION']."</td>
                                <td>".$val['MNUMBER']."</td>
                                <td>".$val['Email']."</td>
                            </tr></b>";
                     }
                ?>
                


            </table>
            <!-- <div id="th"></div> -->

            
        </div>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
</body>
</html>