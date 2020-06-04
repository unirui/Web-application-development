<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teacher
 *
 * @author nikat
 */
class Teacher extends Table {
    public $user_id=0;
    public $otdel_id=0;
    public function validate() {
       if (!empty($this->otdel_id)) {
return true;
}
return false;
    }
}
