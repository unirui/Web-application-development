<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Otdel
 *
 * @author nikat
 */
class Otdel extends table{
    public $otdel_id = 0;
    public $name = '';
    public $active = 1;
    
    public function validate() {
        parent::validate();
        return FALSE;
    }
}