<?php
	
	class Tpl {

		private $titre = 'Titre';
		private $nom = 'page';

		public function head($titre) {
			$this->titre = $titre;
			require 'partials/header.php';
		}

		public function page($nom, $arguments) {
			extract($arguments);
			require 'partials/'. $nom .'.php';
		}

		public function footer() {
			require 'partials/footer.php';
		}

	}

?>