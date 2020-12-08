
<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:grey">
    <div class="container my-5">
    
            <div class="row bg-secondary py-5 my-auto ">
            
               <!--row div  -->
            <div class="col-6 mt-0" >
                <div class="img-fluid">
                  <img src="images/bg.jpg" style="width: 500px; height: 300px;"/>
                
                </div>
            
            
            
            </div>
            <div class="col-6 ">
                <form action="index.php" method="POST" class="formclasse">
                <table class="form-group mt-4" >
                    <tr> 
                        <td>  <label>email</label></td>
                        <td>
                        <input type="email" name="email" class="form-control" required><br></td>
                    </tr>
                    <tr>
                        <td>
                        <label>password</label></td>
                        <td>
                            <input type="password" name="password" class="form-control" required><br></td>
                    </tr>
                    <tr >
                        <td><input type="submit" name="login" value="login" required class="btn btn-outline-primary btn-block mr-3 px-3 "></td>

                        <td><input type="submit" name="anuler" value="anuler"  class="btn btn-danger  ml-3"></td>
                    </tr>
                    
                
                </table>  
                </form>
            </div>
    
    
    
            
            </div>
            <!-- row div -->
    </div>
    <?php 
     $email="";
     $pwd="";

     $db=new PDO('mysql:host=localhost;dbname=informatique',"root","");
    if($db!=null){

        if(isset($_POST['login'])){
           $email=trim($_POST['email']);
           $pwd=trim($_POST['password']);
            $exec=$db->query("select email,pasword,nom,prenom from utilisateur ");
           if($exec!=null){
                      
            while($donnes=$exec->fetch()){
               
                if($donnes['email']===$email && $donnes['pasword']===$pwd){

                    $_SESSION['username']=$donnes['nom'];
                    
                    header("Location:http://localhost/inscription/aceuille.php");die;
                    
                }
            }        

          
              echo "<div class='alert alert-danger float-right alert-dismissible fade show ' role='alert'>
              echec d'authentification!!!
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            </div>";die;
          
            
        }
    
        
    }
    
  }else {
      echo "echec de connexion";
  }
            
            //  $req=$db->query("select nom,prenom from utilisateur");
            //  while($donne=$req->fetch()){
            
          //echo $donne['nom'].' '.$donne['prenom'];
            //  $nom=$donne['nom'];
            //   $prenom=$donne['prenom'];
            //   echo"<table>
              
            //       <tr>
            //          <td>$nom<td/>
            //             <td>$prenom<td/>                     
            //          </td>
                     
            //       </tr>
            //   <table/>";
            

            // }
            
    
   
  ?>
</body>
</html>