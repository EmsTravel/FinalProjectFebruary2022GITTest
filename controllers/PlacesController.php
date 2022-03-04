<?php


class PlacesController 
{
  public function display()
  {
    
      //gestion des templates
      $title="Places";
      $template = 'places.phtml';
      include 'views/mainLayout.phtml';
  }
}
