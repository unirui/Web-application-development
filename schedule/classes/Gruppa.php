<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gruppa
 *
 * @author nikat
 */
class Gruppa extends Table {
    public $gruppa_id=0;
    public $name='';
    public $special_id=0;
    public $date_begin='';
    public $date_end='';
    
    public function validate() {
       if (!empty($this->name) &&
!empty($this->special_id)&&
!empty($this->date_begin)&&
!empty($this->date_end)) {
return true;
}
return false;
    }
}
