<?php


	class Subject {
		
		private $listaObserver;
		
		function __construct() {
			$this->listaObserver = array();
		}
		
		function subscribe($newObserver) {
			array_push($this->listaObserver, $newObserver);
		}
		
		function notify($numeroPedido) {
			foreach ($this->listaObserver as $obs) {
				$obs->notify($numeroPedido);
			}
		}
	}
