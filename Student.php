<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student object
 * @author Teah
 */
class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
