<?php
class SimpleClass
{
	//public $var1='hello' . 'world';
	public $var2 = <<<EDO
		HELLOW WEORKD\n
EDO;
	//public $var3=1+2;
	public $var8 = <<<'EOD'
		this i var 8\n 
EOD;
}

$s=new SimpleClass;
echo $s->var2;
echo $s->var8;

