   <?php require 'model.php';;
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
            <a class="navbar-brand text-uppercase" href="#">Ni-Tech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-5 text-uppercase text-white">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                       <?php
                          if(isset($_SESSION['login']))
                          {
                                ?>
                                <a href="logout.php" class="nav-link">Logout</a>
                              <?php
                          }
                          else
                          {
                            ?>
                               <a href="form.php" class="nav-link">Login</a>
                             <?php
                          }
                       ?>
                    </li>
                </ul>
                </div>  
            </div>
        </nav>
        <div class="header_info text-white">
            <h2 class="text-center text-uppercase">Hello <?php 
               if(isset($_SESSION['login']))
               {
                   echo $_SESSION['login'];
               }
               else
               {
                   echo "login please";
               }
            ?></h2>
            <p class="text-center text-uppercase">Some work is to be done and that will be added soon</p>
            
        </div>
    </header>























    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="assets/js/validate.js"></script>
</body>

</html>