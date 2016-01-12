<?php

	class SSDStudent extends Student {
		public function work(){
		echo "<p>Code, code, test, test… submit!</p>";
		}
		public function play() {
			"<p>Let's go play hockey!</p>";
		}
		public function __construct(){
    		parent::__construct();
	   	}
	}	



?>