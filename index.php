<?php
class user{
	public $name;
	public $surname;
	public $age;

	public function __construct($n,$s,$a){
		$this->name=$n;
		$this->surname=$s;
		$this->age=$a;
		}	

public function show(){
	echo $this->name.' '.$this->surname.' '.$this->age.' let'.PHP_EOL;
	}
}
?>

