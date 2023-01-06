<?php
require_once './App/lib/database.php';
require_once './App/model/BaselModel.php';
require_once './App/controller/slideController.php';
require_once './App/model/test.php';
require_once './App/model/DB.php';
require_once './App/controller/Controller.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
//require_once './vendor/autoload.php';
//require './Common/database-config.php';
//use App\Controller\slide_showController;
//use App\Controller\test;
//use App\Controller;
//use App\slideController;
//use model\DB;
//use model\BaselModel;
switch ($url) {
    case "exam":
//        $ctrl = new Controller\Controller();
//        $ctrl= new exam();
//        $ctrl->test1();
//        include './App/view/slider_show/exam.php';
//        include './App/controller/slideController.php';
        $ctrl= new exam();
        $ctrl->test3();
        break;
    case "bai1":
        include './App/oop/bai1.php';
        break;
    case "bai2":
        include './App/oop/bai2.php';
        break;
    case '/':
        include './knowlage.php';
        break;
    default:
        break;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

