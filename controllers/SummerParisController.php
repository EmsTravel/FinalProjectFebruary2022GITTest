<?php

class SummerParisController
{
    public function display()
    {

    //gestion des templates
      $title="summerParis";
      $template = 'summerParis.phtml';
      include 'views/mainLayout.phtml';
    }
}