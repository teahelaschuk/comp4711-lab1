<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * COMP4711 Lab 1
 * Student class
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
    
    // calculates the average grade for a student
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // formats and prints the student's information (name, average grade, email(s))
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";  
        $result .= "---------------------\n";
        foreach($this->emails as $which => $what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
    
}
