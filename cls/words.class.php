<?php

class words {

	public $array_words;
	public $word;

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

	public function read_Words(){
		return $this->array_words;
	}	

	public function insert_Word() {

		if (file_exists('inc/palavras.txt')) {

			$file = fopen('inc/palavras.txt', 'a');
			$add = $this->word."\n";
			if (fwrite($file, $add)) {
				fclose($file);
				return "1";
			}else {
				return "0";
			}
		}
		return "3";
	}
}
?>