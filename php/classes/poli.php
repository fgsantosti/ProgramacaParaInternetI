<?php  
	
	require_once 'Conta.php';
	require_once 'ContaPoupanca.php';
	require_once 'ContaCorrente.php';

	//cricao dos objetos
	$contas = array();
	$contas[] = new ContaPoupanca(555,"FGS.1234.34", 10000);

	foreach ($contas as $key => $conta) {
		print "{$conta->getInfo()}<br>\n";
		print "Saldo atual: {$conta->getSaldo()}<br>\n";
	}

?>