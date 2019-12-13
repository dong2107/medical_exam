<?php
include_once "Patient.php";

class PatientManager
{
    public $front;
    public $back;
    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }
    public function isEmpty()
    {
        return empty($this->front);
    }
    public function enqueue($name, $code)
    {
        $newPatient = new Patient($name, $code);
        if ($this->isEmpty()){
            $this->back = $newPatient;
            $this->front = $this->back;
        }else{
            $current = $this->front;
            $before = null;
            $currentNode = $current->code;
            $newPatientCode = $newPatient->code;
            while ($currentNode >= $newPatientCode && $current != null){
                $before = $current;
                $current = $current->next;
            }
            if ($current == null){
                $this->back = $newPatient;
            }
            $before->next = $newPatient;
            $newPatient->next = $current;
            if ($current == $this->front){
                $this->front = $newPatient;
            }
        }
    }
    public  function dequeue()
    {
        if ($this->isEmpty()){
            return null;
        }
        $removeNode = $this->front->value;
        $this->front = $this->front->next;
        return $removeNode;
    }
    public function __toString()
    {
        $current = $this->front;
        $listPatient = " ";
        while ($current != null){
            $listPatient .= $current->name. " code: ".$current->next ."<br>";
            $current = $current->next;
        }
        return $listPatient;
    }

}