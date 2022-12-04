<?php
namespace App\Controller;

class Home
{
    //ToDo Twig telepítés után
    //composer require "twig/twig:2.0";
    //echo $twig->render('index', ['teszt'=>'Hello World2!!!']);
    public function indexAction()
    {
        echo "Hello World2!!!";
    }
}