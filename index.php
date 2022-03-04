<?php

//show PHP errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

///////session function
session_start();

///////////autoload function

spl_autoload_register(function ($class) {
    
    if(stristr($class,"Controller"))
    {
        require "controllers/" .$class. ".php";
    }
    else 
    {
        require "models/" .$class. ".php";
    }
});

/////////loading pages 

if(!isset($_GET['page']) )
{
    //accesing  FRONT
    $controller = new HomeController ();
    $controller -> display();
}

else
{
    switch($_GET['page'])  //page to access each specific page on from the site 
    {
    case 'admin':
        $controller = new AdminController();
        $controller -> display();
        break; 
    case 'user':
        $controller = new AdminController();
        $controller -> connect();
        break;
    case 'logout':
        $controller = new AdminController();
        $controller -> destroy();
        break;   
    case 'register':
        $controller = new VisitorController();
        $controller -> display();
        break;
    case 'signUp':
        $controller = new VisitorController();
        $controller -> signUp();
        break;
    case 'commentsDisplay':
        $controller = new CommentController();
        $controller -> display();
        break;
    case 'commentsInfo':
        $controller = new CommentController();
        $controller -> commentsInfo();
        break;       
    case 'places':
        $controller = new PlacesController();
        $controller -> display();
        break;
    case 'aboutme':
        $controller = new AboutmeController();
        $controller -> display();
        break;
    case 'cityescapes':
        $controller = new CityescapesController();
        $controller -> display();
        break;
    case 'seasidescapes':
        $controller = new SeasidescapesController();
        $controller -> display();
        break;
    case 'adventures':
        $controller = new AdventuresController();
        $controller -> display();
        break;
    case 'summerParis':
        $controller = new SouthoffranceController();
        $controller -> display();
        break;
    case 'southoffrance':
        $controller = new SummerParisController();
        $controller -> display();
        break;     
    case 'article':
        $controller = new ArticleController();
        $controller -> addarticle();
        break;
    case 'addarticle':
        $controller = new AddArticleController();
        $controller -> display();
        break;
    case 'addarticle':
        $controller = new AddArticleController();
        $controller -> addArticles();
        break;
    
    case 'cookie':
        $controller =new CookiesController();
        $controller -> makeCookie();
        break; 
    case 'cookiePolicy':
        $controller =new CookiesController();
        $controller -> displayCookie();
        break; 
    case 'cookiePolicy':
        $controller =new CookiesController();
        $controller -> showCookie();
        break; 
        
    }
}








    