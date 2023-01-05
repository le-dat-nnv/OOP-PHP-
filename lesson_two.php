<?php
$da = ['c'=>3 , 'e'=>4 , 'r'=>1];
$dh = $da['c'];
echo $da['r']. "</br>";
echo $dh. "</br>";

$kl = ['green'=>'xanh' , 'red'=>'đỏ' , 'yellow'=>'vàng'];
$info = ['name'=>'ledat' , 'masv'=>'ph21045' , 'age'=>19];
//echo $kl['0'];
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
        <table>
            <tr>
                <th>id</th>
                <th>contant</th>
            </tr>
            <?php
            foreach ($da as $key=>$value) {
            ?>
            <tr>
                <td><?=$key ?></td>
                <td><?=$value?></td>
            </tr>
            <?php }?>
        </table>
        
        <table border="1">
            <tr>
                <th>id</th>
                <th>contant</th>
            </tr>
            <?php
            $tb = "";
            foreach ($kl as $key=>$value) {
                if($key=='green') {
                    $tb = 'background-color : green';
                }
                else if($key=='red') {
                    $tb = 'background-color : red';
                }
                else {
                     $tb = 'background-color : yellow';
                }
            ?>
            <tr>
                <td style="<?php echo $tb?>"><?=$value?></td>
            </tr>
            <?php }?>
        </table>
        <table border="1">
            <?php foreach ($info as $k=>$v) {
                $mau = "";
                if($k=='age') {
                   $mau = $value>=18 ? "background-color:red" : "background-color:'yellow'";
                   echo $mau;
                }
                ?>
            <!--<tr>-->
            <th style=<?php echo $mau?>><?php echo $v?></th>
                <!--}-->
            <!--</tr>-->
            <?php
            
            } ?>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
