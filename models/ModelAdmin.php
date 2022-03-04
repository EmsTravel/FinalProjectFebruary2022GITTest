<?php

class ModelAdmin extends ModelManager
{
    
    
public function getTableau()
      {
   
     $req = "SELECT email as email, text as text FROM Comments ";
     return $this -> queryFetchAll($req);
     
     
    
    }
}    
    
    