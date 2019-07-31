<?php

	class TerceiraClasse implements ObserverInterface {
		private $nPedido;
		
		function __construct() {
			$this->nPedido = 2000;
		}
		
		public function notify($numeroPedido) {
			echo "É igual!³";
		}
	}