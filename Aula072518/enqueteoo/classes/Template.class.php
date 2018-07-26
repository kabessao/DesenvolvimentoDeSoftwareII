<?php
class Template (){
	//var que receverá o arquivo de template
	protected $file;
	//array que receberá os valores para mostrar no template
	protected $values = array();

	//método contstrutor que recebe o arquivo template
	public function __construct($file) {
		$this->file = $file;
	}

	//método que recebe a chave e os valores para o template 
	public function set($key, $values) {
		$this->values[$key] = $value;
	}

	//método para mostrar o conteúdo do array values no template selecionado
	public function show() {
		//teste se existe o template selecionado 
		if (!file_exist($key, $value) {
			return "Erro ao carregar o template ($this->file).<br />";
		}
		//pega o conteúdo do template
		$output = file_get_contents($this->file);

		//loop que varre o array e substitui as chaves do template pelos valores do array
		foreach ($this->values as $key => $value) {
			$tagToReplace  = "[@$key]";
			$output = str_replace($tagToReplace, $value, $output);
		}
