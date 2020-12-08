
<?php 
  session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<!-- header -->

<header style="background-color: rgba(240, 235, 235, 0.952);">
    <div class="row">
        <div class="col-3">
            <div>
                <img src="images/4.png" alt="img" class="rounded-circle" style="width: 100px;height: 100px;">
            </div>

        </div>

        <div class="col-9">

            <div class="text-center ">
                <h1>Bienvenue a l'universite du lac tanganyika</h1>
            </div>
                <?php
                    while($_SESSION!=null){
                        if($_SESSION){
                        echo "<div class='alert alert-success'> welcome (session)".$_SESSION['username']."  </div>";
                                                                      }
                        sleep(5);
                        $_SESSION=null;
                    }
                   
                  
                ?>
                  
        </div>


    </div>
    </div>
</header>
<!-- header -->

<!-- menu -->


<!-- /menu -->

<body>
    <!-- menu -->


    <div class="menu">
        <div class="drop">
            <ul class="drop_menu">

                <li><a href="aceuille.php" style="background-color: teal;">Accueil</a></li>
                <li><a href="#">Evenement marquant</a>
                    <ul>
                        <li><a href="remise.html">Remise</a></li>
                        <li><a href="kermess.html">Kermesse</a></li>
                    </ul>

                </li>

                <li><a href="#">Formation</a></li>
                <li><a href="#">Faculte & Institut</a>
                    <ul>
                        <li><a href="informatique.html">Informatique</a></li>
                        <li><a href="#">Economie</a></li>
                        <li><a href="#">Droit</a></li>
                        <li><a href="#">Statistique</a></li>
                        <li><a href="#">Maintenance</a></li>
                    </ul>
                </li>
                <li><a href="inscription.php"> s'inscrire</a></li>
                <li>
                    <a href="index.php">deconnection</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- /menu -->

    <!-- container for pictures and displayed pges -->

    <div class="container-fluid px-5">
        <!-- row  -->
        <div class="row py-5" id="page">




            <!-- col for pages -->









            <div class="col-9 bg-secondary pt-5 mx-auto">

                <p class="display-3">


                    Bienvenue au site officiele de l'universite du lac tanganyika Bienvenue au site officiele de l'universite du lac tanganyika Bienvenue au site officiele de l'universite du lac tanganyika Bienvenue au site officiele de l'universite du lac tanganyika

                </p>
            </div>
            <!-- end col for pages -->

            <!-- col for pictures -->
            <div class="col-3 bg-red">


                <section style="float:right">
                    <aside style="float: right;">
                        <section style="float:right">
                            <img src="images/1.jpg" style="width: 300px; height: 300px;" />
                        </section>
                        <section style="float:right">
                            <img src="images/2.jpg" style="width: 300px; height: 300px;" />
                        </section>
                        <section style="float:right">
                            <img src="images/3.jpg" style="width: 300px; height: 300px;" />
                        </section>
                        <section style="float:right">
                            <video width="300" height="200" controls>
                                <source src="video/1.webm" type="video/webm">
                                
                              </video>
                        </section>

                    </aside>


                </section>


            </div>

        </div>
        <!-- end col for pictures -->



    </div>
    <!-- row  -->
    <!-- end of container 's pages and pictures -->

    <div class="row">
        <div class="col bg-dark py-5 px-5">
            <p class="text-light">
                <small>contact us on:aubinjaja@gmail.com..</small>
                <legend>aubin ISHIMWE</legend>
                <small>&copy;2020 <a href="https://www.facebook.com/aubin.ishimwe.5">aubinjaja@gmail.com</a> all right reserved </script> </small>


            </p>
        </div>
    </div>
    <!-- javascript for changing the dom -->

</body>

</html>