<?php
include_once "PatientManager.php";

class Patient
{
    public $code;
    public $name;
    public $next;
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }
}