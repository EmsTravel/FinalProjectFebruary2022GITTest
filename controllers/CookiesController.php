<?php

class CookiesController {

   public function displayCookie()
   {

        
        $title="cookiePolicy";
        $template = 'cookiePolicy.phtml';
        include 'views/mainLayout.phtml';
    }
    
    public function makeCookie () {
        
        
   
        //setcookie
       // setcookie('Backpack in one hand',true,time()+365*24*3600);
        setcookie('Backpack','client',time() + 365 * 24 * 60 * 60 ,null,null,false,true);

    }
}