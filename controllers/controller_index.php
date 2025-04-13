<?php

class index extends controller {
	
	public function init(){		
	}
	
	public function inicial(){
		
		$dados = array();
		$dados['_base'] = $this->base();
		$dados['objeto'] = DOMINIO.$this->_controller.'/';
		$dados['controller'] = $this->_controller;
		
		//banner
		$banners = new model_banners();
		$dados['banners'] = $banners->lista('149601285477607');
		
		//textos
		$texto = new model_texto();
		
		/* INICIO TEXTOS SIMPLES */
		$dados['texto1'] = $texto->conteudo_simples('152450163057455');
		$dados['texto2'] = $texto->conteudo_simples('152450161073363');
		$dados['texto3'] = $texto->conteudo_simples('152447456913899');
		$dados['texto4'] = $texto->conteudo_simples('152218928730810');
		$dados['texto5'] = $texto->conteudo_simples('167693780342427');
		$dados['texto6'] = $texto->conteudo_simples('167717654280244');
		$dados['texto7'] = $texto->conteudo_simples('167717663691364');
		$dados['texto8'] = $texto->conteudo_simples('167717665892777');
		$dados['texto9'] = $texto->conteudo_simples('167717667949271');
		$dados['texto10'] = $texto->conteudo_simples('167717670029699');
		/* FIM TEXTOS SIMPLES */


		/* INICIO PAGINAS */
		$dados['planos'] = $texto->conteudo_url('planosinternetssh');
		$dados['planos2'] = $texto->conteudo_url('planosunitv');
		$dados['duvidas'] = $texto->conteudo_url('duvidas');
		$dados['modal1'] = $texto->conteudo_url('downloadapp');
		$dados['modal2'] = $texto->conteudo_url('downloadapp2');
		$dados['status'] = $texto->conteudo_url('status');
		/* FIM INICIO PAGINAS */

		
		//carrega view e envia dados para a tela
		$this->view('index', $dados);
	}
	
}