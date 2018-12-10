<?php

class Calculadora {

	public $numero_1;
	public $numero_2;
	public $operacao;

	function soma() {
		return $this->numero_1 + $this->numero_2;
	}

	function subtracao() {
		return $this->numero_1 - $this->numero_2;	 
	}

	function calcula($n1, $n2, $op) {
		$this->numero_1 = $n1;
		$this->numero_2 = $n2;
		$this->operacao = $op;

		if ($op=="soma") {
			return $this->soma();
		} else if($op=="sub") {
			return $this->subtracao();
		} 
	}
}