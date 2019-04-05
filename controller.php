<?php

include_once 'template.php';

class Controller
{
    private $temp;
    public function __Construct()
    {
        $this->temp = new Template();
    }
    public function main(){
        $this->temp->set('username', 'Tamta');
        $this->temp->set('Age', '19');
        $this->temp->set('header', $this->temp->getFile('header.php')); 
        $this->temp->render('main.php');
    }
}
