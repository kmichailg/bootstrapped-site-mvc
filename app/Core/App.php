<?php
	
	class App {

		protected $controller = 'site';
		protected $method = 'index';
		//Parameters that can be passed
		protected $params = [];

		public function __construct() {
			$url = $this->parseUrl();

			//if there is a controller in $url[0]
			if(file_exists(CONTROLLERS_PATH . "/" . $url[0] . '.php')) {
				$this->controller = $url[0];
				unset($url[0]);				
			}

			require_once CONTROLLERS_PATH . "/" . $this->controller . '.php';

			$this->controller = new $this->controller;
			
			//Check if there is an existing method in the controller found
			if(isset($url[1])) {
				//Check if there is an existing method in the controller found
				if(method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}


			$this->params = $url ? array_values($url) : [];
			
			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		private function parseUrl() {
			if(isset($_GET['url'])) {
				return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			}
		}
	}