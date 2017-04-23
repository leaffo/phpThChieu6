<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XLxoa
 *
 * @author sauton
 */
include 'pdoClass.php';

class XLcustom extends pdoClass {

    function XoaCustom($id) {
        $sql = 'DELETE FROM `customers` WHERE `customers`.`id` = ' . $id;
        $this->execSQL($sql);
    }

    function AddCustom($fn, $ln, $gd,  $email = '',$ad = '', $city = '', $state = '', $zip = '') {
        $sql = "INSERT INTO `customers` (`id`, `fname`, `lname`, `gender`, `email`, `address`, `city`, `state`, `zip`) VALUES (NULL, '$fn', '$ln', '$gd', '$email', '$ad', '$city', '$state', '$zip');";
        $this->execSQL($sql);
        
    }
    function EditCustom($id,$fn, $ln, $gd, $email = '', $ad = '', $city = '', $state = '', $zip = ''){
     $sql="UPDATE `customers` SET `fname` = '$fn', `lname` = '$ln', `gender` = '$gd', `email` = '$email', `address` = '$ad', `city` = '$city', `state` = '$state', `zip` = '$zip' WHERE `customers`.`id` = ".$id;
     $this->execSQL($sql);
     
    }

}

?>