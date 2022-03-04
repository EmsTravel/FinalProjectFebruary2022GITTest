<?php

class CommentsModel extends ModelManager
{
    public function comments()
    {
        $req = "INSERT INTO Comments (text,email)
       
         VALUES (?,?)";

        $parameters = [
        $_POST['text'],
        $_POST['email']
      

    ];
        $this -> query($req,$parameters);
    }
   
   
    
}