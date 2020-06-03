<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Schedule
 *
 * @author nikat
 */
class Schedule extends table{
    
    public $schedule_id=0;
    public $lesso_plan_id=0;
    public $day_id=0;
    public $lesson_num_id=0;
    public $classroom_id=0;
    
    public function validate() {
        
        return FALSE;
    }
}
