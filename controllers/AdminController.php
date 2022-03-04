<?php

class AdminController 
{
    public function display()
    {
        
        //récupération des données
        
        
        
        //gestion des templates
        $template = "back.phtml";
        include "views/backlayout.phtml";
    }
    
    
    
    ///change the requette info
     
    
    
    

    public function connect()
    {
       //var_dump($_POST);

        $ModelAdmin = new ModelAdmin();
        $comments= $ModelAdmin -> getTableau();
         
         

        //recuperation du formulaire
        $userName=$_POST['user'];
        $userPassword=$_POST['password'];
        $hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);
        //var_dump( $userName,$hashed_password );
 

        //instancier le model
        $model = new User();

         //appeler la méthode getData en lui transmettant l'email de l'utilisateur 
        
         $access = $model -> getData($userName);
         //var_dump($access);
         


         if($access == false)
         {
             echo 'invalid username';
             $template = 'error.phtml';
            include "views/backlayout.phtml";
         }


         else{

            //trouver la fonction php qui permet de vérifier qu'un mot de passe crypter est bon (password_hash)
            
            
         if (password_verify($userPassword, $hashed_password)){
             
            //echo 'Successful login!';


            //crée une session
            $_SESSION['user'] = 'admin';
            //call the template backboard.phtml
            //including the mainLayout
          
            
            $template = "backboard.phtml";
            include "views/backlayout.phtml";

         }
         else {
            echo 'Invalid password.';
            $template = "error.phtml";
        include "views/backlayout.phtml";
         }   




         }
    } 
    
       
    
    public function destroy()

    {
        session_destroy();
        unset($_SESSION['user']);
        //appeler la méthode display();
        $this->display();
    }
    
    
    
    
}