<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gruppaMap
 *
 * @author nikat
 */
class GruppaMap  extends BaseMap{
    public function arrGruppas(){
    $res = $this->db->query("SELECT gruppa_id AS id, name AS
value FROM gruppa"); 
    return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
