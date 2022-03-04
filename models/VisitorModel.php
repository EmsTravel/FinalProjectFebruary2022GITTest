<?php

class VisitorModel extends ModelManager
{
    public function register()
    {
        $req = "INSERT INTO Visitors (email,address,name,surname,country,phone,city)
       
         VALUES (?,?,?,?,?,?,?)";

        $parameters = [
        $_POST['email'] ,
        $_POST['address'] ,
        $_POST['name'],
        $_POST['surname'],
        $_POST['country'],
        $_POST['phone'] ,
        $_POST['city']

    ];
        $this -> query($req,$parameters);
    }
    
    
   
}