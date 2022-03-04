<?php

class User extends ModelManager
{
    public function getData($access)
    {
       
      
       
        $req =
        
            "SELECT id_user, email, password
            FROM `User` 
            WHERE email = ?
            ORDER BY id_user "  
        ;
        
        
        
       
        return $this -> queryFetch($req, [$access]);
        
    }
    
    
}