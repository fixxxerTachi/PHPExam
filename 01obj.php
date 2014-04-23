<?php
class Person{
	public $name;
	private $age;
	public function __set($prop,$age){
		$this->age = $age . ' is fool' ;
	}

	public function __get($prop){
		return $this->age;
	}
	public function birthday(){
		echo '99-03--1';
	}
	public function addBirthday(){
		/**** オーバーライドされないようにself ****/
		echo self::birthday() . ' _added'."\n";
	}
	protected function getName(){
		echo  $this->name;
	}

	protected function setName($name){
		echo $this->name=$name;
	}
}

/*** __get,__setはアクセス不能、未定義のプロパティに対して働く ***/
$p=new Person;
$p->age=88;
echo $p->age."\n";

class Employee extends Person{
	public $position, $salary;
	public function birthday(){
		echo '33-12-12';
	}
	
}
$e=new Employee;
$e->addBirthday();

$class=class_exists('Person');
var_dump($class);
$classes=get_declared_classes();
var_dump($classes);
$methods=get_class_methods('Employee');
$values=get_class_vars('Employee');
var_dump($methods);
var_dump($values);

