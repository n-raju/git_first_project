class

<?php
 
 class class1{
 	public $x = 1;
 	function fun1(){
 		echo "fun1";
 	}
	function fun2(){
 		echo "fun2";
 	}

 }

$obj = new class1();

$obj->fun1();

?>

------------

Construct  and destruct

<?php

class class1{
	function __construct(){
		echo "start";
	}

	function fun1(){
		echo "Hello";
	}

	function __destruct(){
		echo "end";
	}

}

$obj = new class1();
$obj->fun1();

?>


------------------

Inheritance : accessing property from one class to another class

<?php
class class1{
	function __construct(){
		echo "construct1";
	}

	function fun1(){
		echo "fun1";
	}
}

class class2 extends class1{
	
}

$obj = new class2();
$obj->fun1();

?>
op : 
construct1fun1


--------------------

exampl 2 inheritance

<?php
class class1{
	function __construct(){
		echo "construct1";
	}

	function fun1(){
		echo "fun1";
	}
}

class class2 extends class1{
	function __construct(){
		echo "construct2"
	}	
}

$obj = new class2();

op : 
construct2

?>
op : 
construct1fun1


--------------------


exampl 3 inheritance

<?php
class class1{
	function __construct(){
		echo "construct1";
	}

	function fun1(){
		echo "fun1";
	}
}

class class2 extends class1{
	function __construct(){
		parent::__construct();   // this will call the parent construct
		echo "construct2"
	}	
}

$obj = new class2();

op : 
construct2

?>
op : 
construct1construct2


-----------------


Encapsulation

variable are protucted we can get the variables through getters and setters

through protucted we can get the variables by using the inheriantance 


Through private we cant get the data, data wil be accessed in the class only



--------------------------------------------



aadded new line


changes made by naga_dev