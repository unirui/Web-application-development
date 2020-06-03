<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helper
 *
 * @author nikat
 */
class Helper {
    public static function clearString($str){
        return trim(strip_tags($str));
    }
    public static function clearInt($str){
        return (int)$str;
    }
}
