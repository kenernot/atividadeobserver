<?php

	class SegundaClasse implements ObserverInterface {
		private $nPedido;
		
		function __construct() {
			$this->nPedido = 2000;
		}
		
		public function notify($numeroPedido) {
			if ($numeroPedido == $this->nPedido) {
				echo "É igual!²";
			}
		}
	}