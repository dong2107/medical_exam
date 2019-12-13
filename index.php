<?php
include_once "Patient.php";
include_once "PatientManager.php";
$listPatient = new PatientManager();
$listPatient->enqueue("jame", 6);
$listPatient->enqueue("jack", 0);
$listPatient->enqueue("david", 1);
var_dump($listPatient);
