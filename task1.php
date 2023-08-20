<?php
 interface code_area{
 	public function CalArea();
 }
 class circle implements code_area{
 	private $radius;
 	public function __construct($radius_val){
 		$this->radius = $radius_val;
 	}
 	public function CalArea(){
 		return pi()*$this->radius**2;
 	}
 }
 class rectangle implements code_area{
 	private $height;
 	private $width;
	public function __construct($height_val,$width_val){
		$this->height = $height_val;
		$this->width = $width_val;
	}
	public function CalArea(){
		return $this->height*$this->width;
	}
 }
 class triAngle implements code_area{
 	private $h;
 	private $w;

 	public function __construct($h_val,$b_val){
    $this->h = $h_val;
    $this->b = $b_val;
 	}
 	public function CalArea(){
 		return ($this->h*$this->b)/2;
 	}
 }



 $cir  = new circle(5);
 echo "The circle is: ".$cir->CalArea()."<br>";

 $rec = new rectangle(20,5);
 echo "The rectangle is: ".$rec->CalArea()."<br>";

 $tri = new triAngle(4,5);
 echo "The triangle is: ".$tri->CalArea();


?>