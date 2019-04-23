<?php

	$b = $a = 5;/* atribui o valor cinco às variáveis $a e $b */
	$c = $a++;	/* pós-incremento, atribui o valor original de $a
	               (5) para $c */
	$e = $d = ++$b;/* pré-incremento, atribui o valor incrementado de $b (6) a $d e $e */
	
	$f = 3;
	$g = 5;
	$h = $g += 10; /* primeiro, $g é incrementado de 10 e termina com o valor 15. o valor da atribuição (15) é então atribuído a $h, e $h termina com o valor 15 também. */
?>