<?php
	class vistasModelo{
		protected function obtener_vistas_modelo($vistas){
			$listaBlanca=["admin-list","admin-search","admin","book-config","book-info","book","catalog","category-list","category","client-list","client-search","client","company-list","company","home","my-account","my-data","provider-list","provider","search"];
			if (in_array($vistas,$listaBlanca)) {
				if (is_file("./vistas/contenidos".$vistas."-view.php")) {
					$contenido="./vistas/contenidos".$vistas."-view.php";
				} else {
					$contenido="login";
				}
			} elseif($vistas=="login"){
				$contenido="login";
			}elseif ($vistas=="index") {
				$contenido="login";
			}else{
				$contenido="login";
			}

		}
	}
?>