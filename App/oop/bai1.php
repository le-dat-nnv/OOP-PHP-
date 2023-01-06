<?php
class lession1{
    public $a1;
    public $a2;
    protected $b3;
    private $b4 = 'thuộc tính private';
    public function __construct() {
        $this->b4;
        $this->a1 = "le huy dat";
        // echo sẽ lập tức gọi hàm còn return thì không
        // hàm khởi tạo không thể gọi để thực hiện 
    }     
    public function setname() {
//        echo $this->a1; thực hiển nhận giá trị từ hàm khởi tạo
//        echo $nameLesson
//        $nameLesson = "le huy dat kk";
//        return $nameLesson;
//        echo $this->a2; -> đây được xem là phương thức gọi sai vì nó không nằm trong hàm khởi tạo 
       $this->name();
    }
    public function name() {
        echo $this->a2 = 'i am test lesson ' . "</br>";
    }
    public function name2() {
        echo 'le dat';
    }
//    protected function firstLesson() {
//        echo $this->b3 . "this is exacl thuộc tính of proteced"
//                . "vì thế sẽ không thể sử dụng bên ngoài class";
//    }
    // không thể gọi hàm khi có protected
    
    protected function firstLesson() {
        echo $this->b3 . "this is exacl thuộc tính of proteced"
                . "vì thế sẽ không thể sử dụng bên ngoài class";
    }
    
//    protected function thirty() {
//        echo $this->b3 = " test level 3";
//    }
    private function second() {
        echo $this->b4 . "this is exacl thuộc tính of private"
                . "vì thế sẽ không thể sử dụng bên ngoài class";
    }
}
class lesson2 extends lession1{
//    $ne = new lession1(); không thể khởi tạo đối tượng trong class
    public function a3() {
        $this->name();
       echo $this->a2 = 'lehuydat';
    }
}
class lesson3 extends lesson2{
    public function name2OfLesson3() {
        echo "</br>";
        echo $this->b3 = 'i am test' . "</br>";
        echo $this->a1 = 'le huy dat';
        echo $this->firstLesson() . "</br>";
        echo $this->second();
    }
}
class lesson4{
    
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
        <h4>bài 1 về oop : __construct là gì</h4>
        <?php
// gọi hàm này 
       $bai1 = new lession1();
       echo $bai1->setname();
       echo $bai1->thirty();
//       echo $bai1->firstLesson(); // không thể trực tiếp thừ class cha 
       // được sử dụng thông qua class con 
       $bai2 = new lesson2();
       echo $bai2->a3();
       $bai3 = new lesson3();
       echo $bai3->name2OfLesson3();
        ?>
    </body>
</html>
