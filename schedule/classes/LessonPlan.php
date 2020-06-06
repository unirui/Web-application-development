<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LessonPlan
 *
 * @author nikat
 */
class LessonPlan extends Table{
    public $lesson_plan_id=0;
    public $gruppa_id=0;
    public $subject_id=0;
    public $user_id=0;
    
    public function validate() {
      try {
if (!empty($this->gruppa_id) && !empty($this->subject_id) && !empty($this->user_id)) {
return true;
} else {
throw new Exception('Не переданны все параметры');
}
} catch (Exception $ex) {
return false;
}
    }
}
