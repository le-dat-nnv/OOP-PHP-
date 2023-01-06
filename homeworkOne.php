<?php
function checkInfo($NameStudent , $IdStudent , $AgeStudent , $EmailStudent) {
    echo $NameStudent. "</br>" . $IdStudent ."</br>" 
            . $AgeStudent . "</br>" . $EmailStudent."</br>";
    $agecurrent= gmdate('Y');
    $age = $agecurrent-$AgeStudent;
    echo $age;
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
        
        <?php
        checkInfo('Le Huy Dat', 'PH21045', '2003', 'ledat@gmail.com');        
// put your code here
        ?>
    </body>
</html>
