<?php



class VisitorController extends HomeController
{
    public function display()
    {
      //display page
        $title="register";
        $template = "register.phtml";
        include "views/mainLayout.phtml";
        
    }

    public function signUp()
    {
        // check the form
        // check if email box not empty
        if(empty($_POST['email']) == true )
        {
          header('location: index.php?page=register');
        }
        else
        {
          $model = new VisitorModel();
          $model ->register();
          header('location: index.php');
        }
    }
    
    
    
    
    
    
    
    
    
}


