<?php
	
	/**
	 * class ContaCorrente
	 */
	class ContaCorrente extends Conta{
		private $limite;
		
		public function _construct($agencia, $conta, $saldo, $limite){
			parent::_construct($agencia, $conta, $saldo);
			$this->limite = $limite;
		}

		public function retirar($quantia){
			if (($this->saldo+$this->limite)>=$quantia) {
				$this->saldo-=$quantia; 
			}else{
				return false;
			}
			return true;
		}
	}
?>