<?php



class CommentController extends HomeController
{
    public function display()
    {
        //display page
        $title="commentsDisplay";
        
    
        
        $template = "commentPage.phtml";
        include "views/mainLayout.phtml";
        
    }

    public function commentsInfo()
    {
        // check the form
        // check if email box not empty
        if(empty($_POST['email']) == true )
        {
          header('location: index.php?page=commentPage');
        }
        else
        {
          $model = new CommentsModel();
          $model ->comments();
          header('location: index.php');
        }
    }
}