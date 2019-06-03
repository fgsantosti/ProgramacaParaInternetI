<?php  
	
	/**
	 * class Conta_Abstract
	 */
	abstract class Conta_Abstract	{
		protected $agencia;
		protected $conta;
		protected $saldo;
		public function depositar($quantia);
		public function retirar($quantia);
	
	}
?>