<?php 

namespace Modules\ValidationClient\Validator;

use Modules\Portal\Imports\ValidatorImport; 
use Illuminate\Validation\Rule;
use Modules\Portal\Rules\NotInCustomRule;

class ClientsValidator extends ValidatorImport
{

	protected $required = ['id', 'corporate_name', 'fantasy_name', 'cpf_cnpj', 'buyer', 'email', 'phone', 'shipping_company_id', 'street', 'number', 'apartment', 'neighborhood', 'city', 'st', 'postcode'];


	public function rule($data){


		return  array_merge([
			'id' =>	['integer', 'min:1', new NotInCustomRule($this->chunkColumn('id', 0, $this->row_index-2), 'Duplicado')],
			'corporate_name' =>	['filled', 'string', 'max:191',new NotInCustomRule($this->chunkColumn('corporate_name', 0, $this->row_index-2), 'Duplicado')],
			'fantasy_name' => 'string|max:191',
			'cpf_cnpj' => ['string', 'max:191', new NotInCustomRule($this->chunkColumn('cpf_cnpj', 0, $this->row_index-2), 'Duplicado')],
			'buyer' => 'string|max:191',
			'email' => 'string|max:191',
			'phone' => 'string|max:191',
			'shipping_company_id' => 'integer|min:1',
			'street' =>	'string|max:191',
			'number' =>	'integer|min:0',
			'apartment' => 'string|max:191',
			'neighborhood' => 'string|max:191',
			'city' => 'string|max:191', 
			'st' =>	'string|max:2',
			'postcode' => 'string|max:8'
		],parent::rule($data));
	}

public function messages(){
		return  [];
	}


}
