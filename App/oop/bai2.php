<?php 
abstract class oopPhp{
    public $name;
    abstract public function intoductionOfYour() : string;
//        echo $this->name="lê huy đạt";
    // hàm abstract cannot used ham normal
}
class oopPhp2 extends oopPhp{
    public function intoductionOfYour() :string {
        return  "le huy dat";
    }
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h4>the class and Abstract and  method</h4>
        <?php
        $bai2 = new oopPhp2();
        echo $bai2->intoductionOfYour();
        ?>
    </body>
</html>
