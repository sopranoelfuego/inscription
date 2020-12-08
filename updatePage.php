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

<header>
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


    <div class="menu">
        <div class="drop">
            <ul class="drop_menu">

                <li><a href="aceuille.php">Accueil</a></li>
                <li><a href="#">Evenement marquant</a>
                    <ul>
                        <li><a href="remise.html">Remise</a></li>
                        <li><a href="#">Kermesse</a></li>
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
                <li><a href="inscription.php" > s'inscrire</a></li>
                <li>
                    <a href="index.php">deconnection</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- /menu -->

    <!-- container for pictures and displayed pges -->

    <div class="container-fluid px-5">
        <div class="row py-5" id="page">




            <!-- col for pages -->









            <div class="col-9 pt-5 mx-auto" style="background-color: rgba(223, 209, 209, 0.479);">

               <h2 class="display-5" style="color:green;font-weigth:bold">update etudiant  </h2>
                <form action="updatePage.php" method="POST">


                    <table style="border-collapse:collapse;border:1;margin-bottom: 20px; padding-right: 70px;font-size: 20px;">

                        <tr>
                            <td>nom</td>
                            <td><input type="text" name="nom" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>prenom</td>
                            <td><input type="text" name="prenom" class="form-control"></td>

                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="email" name="email" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>telephone</td>
                            <td><input type="contact" name="telephone" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>date naissance</td>
                            <td><input type="date" name="dateNaissance" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>nationalite</td>
                            <td>
                                <select name="nationalite" id="idnationalite">
                              <option value="">       </option>
                              <option value="burundian" >burundian</option>
                              <option value="australian" >australian</option>
                              <option value="american" >american</option>
                            </select>
                            </td>
                        </tr>


                        <tr style="width: 100%;">
                            <td style="width: 50%;">
                                <fieldset>
                                    <legend>sexe</legend>
                                    homme<input type="radio" value="h" name="sexe"><br> femme <input type="radio" value="f" name="sexe"><br>

                                </fieldset>
                            </td>

                            <td style="width: 50%;">
                                <fieldset>

                                    <legend>etat civil</legend>
                                    marie<input type="radio" value="marie" name="etatcivil"> <br> celibataire
                                    <input type="radio" value="celibataire" name="etatcivil"><br> divorce <input type="radio" value="divorce" name="etatcivil"><br> veuf <input type="radio" value="veuf" name="etatcivil">
                                </fieldset>

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>diplome</legend>
                                    humanite generale<input type="checkbox"  value="diplome" name="diplome[]"><br> diplome d'etat<input type="checkbox" value="diplome_etat" name="diplome[]"><br> a2
                                    <input type="checkbox" value="a2" name="diplome[]"><br> a3

                                    <input type="checkbox" value="a3" name="diplome[]">
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td>faculte</td>
                            <td><select name="faculte" id="idfaculte">
                              <option value="informatique" > informatique</option>
                              <option value="gestion" >gestion</option>
                              <option value="communication">informatique</option>
                              
        
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td>niveau</td>
                            <td><select name="niveau" id="idniveau">
                <option value="bac1" >bac1</option>
                <option value="bac2"> bac2</option>
                <option value="bac3">bac3</option>
                
        
              </select></td>
                        </tr>
                        <tr>
                            <td>province</td>
                            <td><select name="province" id="">
                <option value="bujumbura" >bujumbura</option>
                <option value="bururi" >bururi</option>
                <option value="gitega" >gitega</option>
               
                
        
              </select></td>
                        </tr>
                        <tr>
                            <td>numero de la carte identite</td>
                            <td><input type="text" name="numeroID" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="update" name="update" class="btn btn-block btn-primary" style="float: right;" class="form-control"></td>

                            <td> <input type="submit" value="cancel" name="cancel" class="btn btn-block btn-danger pr-5" style="float: right;" class="form-control"></td>

                        </tr>

                    </table>
                </form>
                <td>
                    <!-- php over here -->
                    <?php 
                    
                    $db=new PDO('mysql:host=localhost;dbname=informatique',"root","");
                   
                    $varRecuper=$_SESSION['name'];
                   if(isset($_POST['update'])){
                                    $nom=$_POST['nom'];
                                    $prenom=$_POST['prenom'];
                                    $email=$_POST['email'];
                                    $telephone=$_POST['telephone'];
                                    $dateNaissance=$_POST['dateNaissance'];
                                    $nationalite=$_POST['nationalite'];
                                    $sexe=$_POST['sexe'];
                                    $etatcivil=$_POST['etatcivil'];
                                    $diplome=implode ('&',$_POST['diplome']);
                                    $faculte=$_POST['faculte'];
                                    $niveau=$_POST['niveau'];
                                    $province=$_POST['province'];
                                    $numeroID=$_POST['numeroID'];
                                        
                                    


                                    $request="update etudiant set nom=ifnull($nom,$nom),
                                    prenom=ifnull($prenom,select prenom from etudiant where nom='$varRecuper'),
                                    email=ifnull($email,select email from etudiant where nom='$varRecuper'),
                                    telephone=ifnull($telephone,select telephone from etudiant where nom='$varRecuper'),
                                    date_naissance=ifnull($dateNaissance,select date_naissance from etudiant where nom='$varRecuper'),
                                    nationaltite=ifnull($nationalite,select nationalite from etudiant where nom='$varRecuper'),
                                    sexe=ifnull($sexe,select sexe from etudiant where nom='$varRecuper'),
                                    etatcivil=ifnull($etatcivil,select etatcivil from etudiant where nom='$varRecuper'),
                                    diplome=ifnull($diplome,select diplome from etudiant where nom='$varRecuper') ,   
                                    faculte=ifnull($faculte,select faculte from etudiant where nom='$varRecuper'),
                                    niveau=ifnull($niveau,select niveau from etudiant where nom='$varRecuper') ,
                                    province=ifnull($province,select prenom from etudiant where nom='$varRecuper'), 
                                    nemero_Carteid=ifnull($numeroID,select prenom from etudiant where nom='$varRecuper')            
                                    etatcivil,diplome,faculte,niveau,province,nemero_Carteid)";
                                    
                                    if($db->exec($request)){
                                        echo "<div class='alert alert-success'>
                                                        <small>enregisrement avec success!!!</small>
                                        
                                        </div>";
                                    }
                                        
                                

                       
                         
                                
                        
                   }
                if(isset($_POST['cancel'])){
                    header("Location:http://localhost/inscription/i.php");die;

                }
                   
                   
                   ?>
                    <!-- end of php -->

                </td>
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