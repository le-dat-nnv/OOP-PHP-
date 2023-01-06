<?php
class Format{
    // hỗ trợ ngày 
    public function formatDate($date) {
        return date('F j,Y , g:i a', strtotime($date));
    }
    // kiểm trả form
    public function validation($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

