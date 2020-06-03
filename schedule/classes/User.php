<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author nikat
 */
class User extends table {
    public $user_id = 0;
    public $lastname ='';
    public $firstname='';
    public $login='';
    public $pass='';
    public $gender_id ='';
    public $birthday='';
    public $active=1;


    public function validate() {
        
        return FALSE;
    }
}
