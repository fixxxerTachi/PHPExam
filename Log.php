<?php
class Log{
	private $filename;
	private $fh;
	public function __construct($filename){	
		$this->filename=$filename;
		$this->open();
	}
	public function open(){
		$this->fh=fopen($this->filename,'a') or die('Cannot open ');
	}
	public function write($note){
		fwrite($this->fh,"{$note}\n");
	}

	public function read(){
		return join('',file($this->filename));
	}
	function __wakeup(){
		$this->open();
	}
	function __sleep(){
		fclose($this->fh);
		return array('filename');
	}
}
