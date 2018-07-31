<?php
namespace Funcoes;

use Rain\Tpl;

class Page {

	private $tpl;
	private $defaults = [ #cabeçalho
		"data"=>[] #guarda o valor de $defaults e $opts
	];

	public function __construct($opts = array()){

		$this->options = array_merge($this->defaults, $opts); #mescla as array

		$config = array(
		    "tpl_dir"	=> $_SERVER["DOCUMENT_ROOT"]."/login/views/", #preocura pasta com os template
		    "cache_dir"	=> $_SERVER["DOCUMENT_ROOT"]."/login/views-cache/", #cache das paginas
		    "debug"         => true
		);

		Tpl::configure($config);#chama função da class Tpl

		$this->tpl = new Tpl;

		$this->setData($this->options["data"]);

		$this->tpl->draw("header"); #header da pagina
	}


	private function setData($data = array())
	{

		foreach ($data as $key => $value) {
			$this->tpl->assign($key, $value); #exibe o taplate via metodo assign
		}
	}

	public function setTpl($name, $data = array(), $returnHTML = false){#corpo da pagina $name = nome da pagina $data = dados da pagina
          	
          	$this->setData($data);#chama os dados da pagina

          	return $this->tpl->draw($name, $returnHTML);
		
	}

	public function __destruct(){

		$this->tpl->draw("footer"); #footer da pagina
	} 
}


?>