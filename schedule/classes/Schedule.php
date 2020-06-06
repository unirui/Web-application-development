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
class Schedule extends Table{
    
    public $schedule_id=0;
    public $lesso_plan_id=0;
    public $day_id=0;
    public $lesson_num_id=0;
    public $classroom_id=0;
    
    public function validate() {
      try {
if (!empty($this->lesson_plan_id) && !empty($this->day_id) && !empty($this->lesson_num_id) && !empty($this->classroom_id)) {
return true;
} else {
throw new Exception('Не переданны все параметры');
}
} catch (Exception $ex) {
return false;
}
}
}
