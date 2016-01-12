<!DOCTYPE html>
<html>
	<head>
		<title>Joel Benoit Assignment 2B</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>

<?php

function __autoload($classname){
   	require_once(  "./" . $classname . ".php"   );
}

class Student{
	
	const MAX_STUDENTS_OBJECTS = 20;
	public static $totalNumStudents = 0;
	public $studentNum = "aaa";
	public $fName = "bbb";
	public $lName = "ccc";
	
	public function setStudentNum($studentID){
		if ( is_string($studentID) AND strlen($studentID) == 9){
		$this->studentNum = $studentID;
		}
		else {
			echo "<p>Invalid ID</p>";
		}
	}
	
	public function getStudentNum(){
		return $this->studentNum;
	}
	

	
	public function setFName($studentFName){
		if ( is_string($studentFName) AND strlen($studentFName) > 2){
		$this->fName = $studentFName;
		}
		else {
			echo "<p>Invalid First Name</p>";
		}
	}
	
	public function getFName(){
		return $this->fName;
	}

	
	public function setLName($studentLName){
		if ( is_string($studentLName) AND strlen($studentLName) > 2){
		$this->lName = $studentLName;
		}
		else {
			echo "<p>Invalid Last Name</p>";
		}
	}
	
	public function getLName(){
		return $this->lName;
	}

	
	public function __construct(){
		if (self::$totalNumStudents <= self::MAX_STUDENTS_OBJECTS){
			self::$totalNumStudents++;
		} else {
		die();	
		}
	}
	
	public function work(){
		echo "<p>Code, code, code, test, test, test… submit!</p>";
	}
}
		
	$newStudent1 = new Student();
	$newStudent1 -> setStudentNum( "A00000000" );
	$newStudent1 -> setFName( "Jacob" );
	$newStudent1 -> setLName( "Feng" );
	echo "<p>Student Number: ".$newStudent1 -> getStudentNum()."</p>";
	echo "<p>First Name: ".$newStudent1 -> getFName()."</p>";
	echo "<p>Last Name: ".$newStudent1 -> getLName()."</p>";
	echo "<p>Total Number of Student Objects: ".Student::$totalNumStudents."</p>";
	
	$newStudent2 = new Student();
	$newStudent2 -> setStudentNum( "A12345678" );
	$newStudent2 -> setFName( "Jared" );
	$newStudent2 -> setLName( "Long" );
	echo "<br>Student Number: ".$newStudent2 -> getStudentNum()."</br>";
	echo "<p>First Name: ".$newStudent2 -> getFName()."</p>";
	echo "<p>Last Name: ".$newStudent2 -> getLName()."</p>";
	echo "<p>Total Number of Student Objects:  ".Student::$totalNumStudents."</p>";
	
	$newStudent3 = new SSDStudent();
	$newStudent3 -> setStudentNum( "A87654321" );
	$newStudent3 -> setFName( "Cypress" );
	$newStudent3 -> setLName( "Hill" );
	echo "<br>Student Number: ".$newStudent3 -> getStudentNum()."</br>";
	echo "<p>First Name: ".$newStudent3 -> getFName()."</p>";
	echo "<p>Last Name: ".$newStudent3 -> getLName()."</p>";
	echo "<p>Total Number of Student Objects: ".Student::$totalNumStudents."</p>";

	$newStudent4 = new SSDStudent();
	$newStudent4 -> setStudentNum( "A18273645" );
	$newStudent4 -> setFName( "Supreme" );
	$newStudent4 -> setLName( "Leader" );
	echo "<br>Student Number: ".$newStudent4 -> getStudentNum()."</br>";
	echo "<p>First Name: ".$newStudent4 -> getFName()."</p>";
	echo "<p>Last Name: ".$newStudent4 -> getLName()."</p>";
	echo "<p>Total Number of Student Objects: ".Student::$totalNumStudents."</p>";

?>



</body>
</html>