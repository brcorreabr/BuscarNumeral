<?php

/** 
 * @author bruno.correa
 * 
 */
class Numeral {
	
	private $valor;
	private $divisaoDoValor;
	private $restoDoValor;
	
	
	function __construct($valor) {
		$this->setValor ( $valor );
		$this->setDivisaoDoValor ( intval ( $valor / 100 ) );
		$this->setRestoDoValor ( $valor % 100 );
	}
	
	/**
	 * @return Boolean
	 */
	public function encontrarNumeralValido() {
		$resultado = (pow ( $this->getDivisaoDoValor () + $this->getRestoDoValor (), 2 ) == $this->valor ? true : false);
		return $resultado;
	}
	
	/**
	 * @return String
	 */
	public function impressaoDoResultadoValido() {
		if ($this->encontrarNumeralValido ()) :
			$impressao = "O número " . $this->getValor () . " gera os números " . $this->getDivisaoDoValor () . " e " . $this->getRestoDoValor () . " somados temos " . ($this->getDivisaoDoValor () + $this->getRestoDoValor ()) . " se elevarmos ao quadrado temos " . pow ( ($this->getDivisaoDoValor () + $this->getRestoDoValor ()), 2 );
			
			return $impressao;
		
		endif;
		
		return NULL;
	}
	
	/**
	 * @param Int $valor        	
	 */
	private function setValor($valor) {
		$this->valor = $valor;
	}
	
	/**
	 * @return the $valor
	 */
	public function getValor() {
		return $this->valor;
	}
	
	/**
	 * @param Int $divisaoDoValor        	
	 */
	private function setDivisaoDoValor($divisaoDoValor) {
		$this->divisaoDoValor = $divisaoDoValor;
	}
	
	/**
	 * @return the $divisaoDoValor
	 */
	public function getDivisaoDoValor() {
		return $this->divisaoDoValor;
	}
	
	/**
	 * @param Int $restoDoValor        	
	 */
	private function setRestoDoValor($restoDoValor) {
		$this->restoDoValor = $restoDoValor;
	}
	
	/**
	 * @return the $restoDoValor
	 */
	public function getRestoDoValor() {
		return $this->restoDoValor;
	}
}

?>