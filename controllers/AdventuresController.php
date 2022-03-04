<?php

class AdventuresController{

    public function display()
    {

        //templates
          $title="Adventures";
          $template = 'adventures.phtml';
          include 'views/mainLayout.phtml';
        }


}