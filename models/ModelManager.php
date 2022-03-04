<?php

// abstract class for more protection
abstract class ModelManager
{
    protected $bdd;
    
    public function __construct()
    {
    //connexion to the database
   
    
    
    $this-> bdd = new PDO('mysql:host=db.3wa.io;dbname=emiliacon_Final-Project;charset=utf8mb4','emiliacon','18e34db7f5f4e416c93c3418712d2b38');
    }

   public function queryFetchAll($req,$params = [])
   {
       //preparation
       $query = $this -> bdd -> prepare($req);
       //execute
       $query -> execute($params);
       //recover les datas
       return $query -> fetchAll(PDO::FETCH_ASSOC);

   }

   public function queryFetch($req,$params = [])
   {
        //preparation
        $query = $this -> bdd -> prepare($req);
        //execute
        $query -> execute($params);
        //recover les datas
        return $query -> fetch(PDO::FETCH_ASSOC);
   }
   // related to insert
   public function query($req,$params = [])
   {
        //preparation
       $query = $this -> bdd -> prepare($req);
       //execute
       return $query -> execute($params);
   }
}