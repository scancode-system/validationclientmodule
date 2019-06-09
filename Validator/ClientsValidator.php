<?php

namespace Modules\ValidationClient\Validator;

use App\Imports\ValidatorImport;

class ClientsValidator extends ValidatorImport
{

	public function rule($data){
		return [
			'id_cliente' 			=>	'integer|min:1|unique_custom_values',
			'nome_fantasia' 		=>	'nullable|string|max:255',
			'razao_social' 			=>	'filled|string|max:255',
			'cpf_cnpj' 				=>	'nullable|string|max:18|unique_custom_values',
			'inscricao_estadual' 	=>	'nullable|string|max:100',
			'nome_contato' 			=>	'nullable|string|max:255',
			'nome_comprador' 		=>	'nullable|string|max:30',
			'email' 				=>	'nullable|string|max:60|email',
			'tel_1' 				=>	'nullable|string|max:15',
			'tel_2' 				=>	'nullable|string|max:15',
			'observacao' 			=>	'nullable|string',
			'varejo' 				=>	'integer|between:0,1',
			'logradouro' 			=>	'nullable|string|max:255',
			'bairro' 				=>	'nullable|string|max:255',
			'cidade' 				=>	'nullable|string|max:255',
			'uf' 					=>	'nullable|string|max:2',
			'cep' 					=>	'nullable|string|max:10',
			'cliente_status' 		=>	'nullable|string|max:255',
			'transportadora_id' 	=>	'nullable|integer|min:1',
			'transportadora' 		=>	'nullable|string|max:255'		
		];
	}

}
