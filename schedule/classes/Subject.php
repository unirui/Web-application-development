<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subject
 *
 * @author nikat
 */
class Subject extends table{
    public $subject_id=0;
    public $name='';
    public $otdel_id=0;
    public $hours=0;
    public $active=1;
    
    public function validate() {
        parent::validate();
        return FALSE;
    }
}
