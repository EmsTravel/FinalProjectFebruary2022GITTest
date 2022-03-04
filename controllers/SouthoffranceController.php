<?php

class SouthoffranceController
{
    public function display()
    {

    //gestion des templates
      $title="Southoffrance";
      $template = 'southoffrance.phtml';
      include 'views/mainLayout.phtml';
    }
}