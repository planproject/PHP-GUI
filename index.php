<?php

require 'vendor/autoload.php';

use Gui\Application;
use Gui\Components\Button;
use Gui\Components\Label;
use \Gui\Components\Window;
use \Gui\Components\Calendar;

$application = new Application();

$application->on('start', function() use ($application) {
    $button = (new Button())
        ->setLeft(100)
        ->setTop(200)
        ->setWidth(200)
        ->setVisible('23')
        ->setValue('Look, I\'m a button!');
    //canvas
//    $canvas = new \Gui\Components\Canvas();
//    $canvas->setPixel(800,800,'#333333')->setSize(300,300);

    //InputDate
    $date = new \Gui\Components\Shape();
    $date->setWidth(300)->setBackgroundColor('#FFB6C1')->setBorderColor('#483D8B');

    $label = new Label();
    $label->setFontColor('#123456')->setFontSize('20')->setText('ForGive Me');

    $button->on('click', function() use ($button,$label) {
        $button->setValue('Look, I\'m a clicked button!');
    });
});
//window
//$application->on('start', function () use ($application){
//    $canvas = new \Gui\Components\Canvas();
//    $canvas->setPixel(200,200,'333333');
//    $canvas->setSize(100,100);
//
//    $window = new Window();
//    $window->setTitle('ProkofievSonata')->setWindowState('maximized');
//    $window->on('click', function () use ($window){
//    });
//});

//$application->on('exit', function () use ($application){
//    $window = new Window();
//    $window->setTitle('ProkofievSonata')->setWindowState('maximized');
//
//    $window->on('click', function () use ($window){
//
//    });
//});
$application->run();
