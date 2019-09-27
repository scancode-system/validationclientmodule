<?php

namespace Modules\ValidationClient\Validator;

use Modules\Portal\Imports\ValidatorImport; 
use Illuminate\Validation\Rule;
use Modules\Portal\Rules\NotInCustomRule;

class ClientsValidator extends ValidatorImport
{

	protected $required = ['cpf_cnpj', 'razao_social'];

	public function rule($data){
		return [
			'id_cliente' 			=>	['integer', 'min:1', new NotInCustomRule($this->chunkColumn('id_cliente', 0, $this->row_index-2), 'Duplicado')],
			'nome_fantasia' 		=>	'string|max:255',
			'razao_social' 			=>	'filled|string|max:255',
			'cpf_cnpj' 				=>	['string', 'max:18', new NotInCustomRule($this->chunkColumn('cpf_cnpj', 0, $this->row_index-2), 'Duplicado')],
			'inscricao_estadual' 	=>	'string|max:100',
			'nome_contato' 			=>	'string|max:255',
			'nome_comprador' 		=>	'string|max:30',
			'email' 				=>	'string|max:60',
			'tel_1' 				=>	'string|max:14',
			'tel_2' 				=>	'string|max:14',
			'observacao' 			=>	'string',
			'varejo' 				=>	'integer|between:0,1',
			'logradouro' 			=>	'string|max:255',
			'bairro' 				=>	'string|max:255',
			'cidade' 				=>	'string|max:255',
			'uf' 					=>	'string|max:2',
			'cep' 					=>	'string|max:10',
			'cliente_status' 		=>	'string|max:255',
			'transportadora_codigo' =>	'string|max:255'		
		];
	}

	protected function filters(){
		$this->phoneFilter(['tel_1', 'tel_2']);
		$this->lengthFilter(['email'], 60);
		$this->lengthFilter(['uf'], 2);
		$this->lengthFilter(['nome_comprador'], 30);
	}

	public function messages(){
		return  [];
	}

}
