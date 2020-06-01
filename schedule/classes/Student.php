<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author nikat
 */
class Student extends table{
    public $user_id=0;
    public  $gruppa_id=0;
    public $num_zach='';
    
    public function validate() {
        parent::validate();
        return FALSE;
    }
}
