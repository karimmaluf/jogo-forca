<?php

class words {

	public $array_words;

	private $result;
	
	function __construct(){
		$this->get_Words();
	}
	
	public function get_Words(){

		$this->array_words = file('inc/palavras.txt');

	}	
	
	public function raffle_Word(){
		$random = rand(0, sizeof($this->array_words));
		$this->result = $this->array_words[$random];
		return $this->result;
	}		
}
?>