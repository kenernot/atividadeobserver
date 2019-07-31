<?php

	class PrimeiraClasse implements ObserverInterface {
		private $nPedido;
		
		function __construct() {
			$this->nPedido = 1000;
		}
		
		public function notify($numeroPedido) {
			if ($numeroPedido == $this->nPedido) {
				echo "É igual!¹";
			}
		}
	}