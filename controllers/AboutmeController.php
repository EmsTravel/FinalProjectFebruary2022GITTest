<?php

class AboutmeController
{
    public function display()
    {

    //gestion des templates
      $title="Aboutme";
      $template = 'aboutme.phtml';
      include 'views/mainLayout.phtml';
    }
}