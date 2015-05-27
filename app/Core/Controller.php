<?php

	class Controller {
		public function getModel($modelName){ 
			require_once MODELS_PATH . "/" . $modelName . '.php';
			return new $modelName();
		}

		public function view($viewName, $data = []) {
			require_once VIEWS_PATH . "/" . $viewName . '.php';
		}
	}