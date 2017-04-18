<?php

	class Router {

		public function get($route, $callback) {
			$path = trim($_SERVER['PATH_INFO'],'/');

			if ($path === $route) {
				$callback();
			}
			
		}

	}

?>