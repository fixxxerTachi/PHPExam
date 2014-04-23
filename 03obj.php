<?php
class myClass{
	protected function myFunc(){
		echo "MyClass::myfunc\n";
	}
}
class OtherClass extends MyClass{
	public function myFunc()
	{
		parent::myFunc();
		echo "OtherClass::myfunc\n";
	}
}
$class=new OtherClass();
$class->myFunc();

class Foo{
	public static $my_static='foo';
	public function staticValue(){
		return self::$my_static;
	}
}
class Bar extends Foo{
	public function fooStatic(){
		return parent::$my_static;
	}
}
echo Foo::$my_static . "\n"; //=>foo
$foo=new Foo;
echo $foo->staticValue() . "\n"; //=>foo
echo $foo->my_static . "\n"; //=>Notic::undefined value....
echo $foo::$my_static . "\n"; //->foo
echo Bar::$my_static . "\n"; //=>foo
$bar =  new Bar;
echo $bar->fooStatic() . "\n"; //=>foo


