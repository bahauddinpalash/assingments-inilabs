<?php 
 class employee{
 	private $name;
 	private $salary;


 	public function getName(){
 		return $this->name;
 	}
 	public function getSalary(){
 		return $this->salary;
 	}
 	public function setName($name){
 		$this->name = $name;
 	}
 	public function setSalary($salary){
 		$this->salary = $salary;

 	}
 }

$jamuna = new employee();
$jamuna->setName("Kamal");
$jamuna->setSalary(20000);
echo "Employee name is: ".$jamuna->getName()."</br>";
echo "His salary is: ".$jamuna->getSalary()." Taka";

?>