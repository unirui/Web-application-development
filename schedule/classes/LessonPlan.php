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
class LessonPlan extends table{
    public $lesson_plan_id=0;
    public $gruppa_id=0;
    public $subject_id=0;
    public $user_id=0;
    
    public function validate() {
        parent::validate();
        return FALSE;
    }
}
