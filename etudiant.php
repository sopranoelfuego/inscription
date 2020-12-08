
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
        </div>


    </div>
    </div>
</header>
<!-- header -->

<!-- menu -->


<!-- /menu -->

<body>
    <!-- menu -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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

                <li><a href="etudiant.php" style="background-color: teal;">etudiant</a></li>
                <li><a href="#">Faculte & Institut</a>
                    <ul>
                        <li><a href="informatique.html">Informatique</a></li>
                        <li><a href="#">Economie</a></li>
                        <li><a href="#">Droit</a></li>
                        <li><a href="#">Statistique</a></li>
                        <li><a href="#">Maintenance</a></li>
                    </ul>
                </li>
                <li><a href="inscription.html"> s'inscrire</a></li>
                <li>
                    <a href="index.php">deconnection</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- /menu -->

    <!-- container for pictures and displayed pges -->

    <div class="container-fluid">
        <!-- row  -->
        <div class="row py-5" id="page">




            <!-- col for pages -->









            <div class="col-9 px-2 mx-auto" style="font-size:15px;">


                <!-- searching etudiant -->
            
                <div class="row">
                    <!-- afficher etudiant -->
                    <div class="col">
                        <div class="container">
        <?php 
                    
     $db=new PDO('mysql:host=localhost;dbname=informatique',"root","");
     if($db!=null){

           $resultat=$db->prepare("select * from etudiant");
           $resultat->execute();
           if($resultat!=null){
            echo "<table border='1' style='border-collapse=collapse;font-size:15px;'>";
                  echo "    
                   <tr>
                       <td>nom</td>
                       <td>prenom</td>
                       <td>date de naissance</td>
                       <td>email</td>
                       <td>cni<td>

                       <td>contact</td>
                        <td>etat civile</td>
                       
                       <td>sexe</td>

                       <td>nationalite</td>
                       
                       <td>faculte</td>
                       <td>niveau</td>
                       <td>campus</td>
                       
                       </tr>"."\n";

             $tableElement=$resultat->fetchAll();
            foreach($tableElement as $donne) {
                
                $nom=$donne['nom'];
                    $prenom=$donne['prenom'];
                    $date_naissance =$donne['date_naissance'];

                    $email=$donne['email'];
                    $nemero_Carteid=$donne['nemero_Carteid'];
                    $diplome=$donne['diplome'];
                                    
                    $telephone=$donne['telephone'];
                    $etatcivil=$donne['etatcivil'];
                    $sexe= $donne['sexe'];
                    $nationalite=$donne['nationalite'];
                    $faculte= $donne['faculte'];
                    $niveau=$donne['niveau'];
                    $province= $donne['province'];   
                    
                   echo "
                   
                      <tr>
                          <td> $nom</td>
                          <td> $prenom</td>
                          <td>$date_naissance</td>
                          <td>$email</td>
                          <td>$nemero_Carteid</td>
                          <td>$diplome</td>
                          <td>$telephone</td>
                          <td>$etatcivil</td>
                          <td>$sexe</td>
                          <td>$nationalite</td>
                          <td>$faculte</td>
                          <td>$niveau</td>
                          <td>$province</td>

                      </tr>.'\n' 

                   ";
            } 
            // while($donne=$exec->fetch_assoc()){

                    
            // }

            echo "</table>";
           }else{
               echo "error has accurate";
           }
          
           


       




     }else echo "<div class='alert alert-danger'> echec de connexion
     </div>";
        ?>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
  edit etudiant
</button>

<!-- Modal -->
<div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">choisir l'etudiant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
            <div>
                <form action='etudiant.php' method="POST" >
                    <div class="form-group">
                       <select name='nameToChange'>
                           <p>nom</p>
                            
                       <?php
                            
                            
                    
                            foreach($tableElement as $donne){
                               $nom=$donne['nom'];
                                echo " 
                                      <option value='$nom' class='float-right  align-content-center'>$nom</option>

                                ";
                            }
                            
                            
                       ?>
                       
                       </select>
                    
                    </div>
                    </form> 
                   
            </div>";
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="updatePage.php"> <button type="button" class="btn btn-primary" name='valide' >valider </button></a>
      </div>
    </div>
  </div>
</div>
                        </div>
                    </div>
                </div>

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
    <?php 
    
       if(isset($_POST['valide'])){
           
       
        
        $_SESSION['name'] =$_POST['nameToChange'];
         


       }
    ?>
    <!-- javascript for changing the dom -->

</body>

</html>