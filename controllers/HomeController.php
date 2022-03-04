<?php 

class HomeController 
{
  public function display()
  {

    
//gestion des templates

$title = 'Travel-Blog';
$template = 'home.phtml';
include 'views/mainLayout.phtml';
 }
}
