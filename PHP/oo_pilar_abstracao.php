<?php 
	
	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters setters (overloading)
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo; 
		}


		/*
		function setNome($nome) {
			$this->nome = $nome;
		}
		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}
		function getNome() {
			return $this->nome;
		}

		function getNumFilhos() {
			return $this->numFilhos;
		}

		*/



		//metodos 
		function resumirCadaFunc() {
			return $this->__get('nome') . "possui " . $this->__get('numFilhos') . "filho(s)";
		}
		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();
	$y->__set('nome', 'Jose');
	//$y->setNome('Rafael');
	$y->__set('numFilhos', 2);
	//echo $y->resumirCadFunc();

	//echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos(s) ';
	//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s) ';

	echo "<br>";

	$x = new Funcionario();
	//$x->setNome('Julia');
	$x->__set('nome', 'Maria');
	$x->__set('numFilhos', 0);


	//$x->setNumFilhos(0);
	//echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s) ';
	//echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s) ';



?>