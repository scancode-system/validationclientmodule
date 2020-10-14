<?php

namespace Modules\ValidationClient\Services; 


use Modules\Portal\Rules\NotInCustomRule;
use Modules\Portal\Services\Validation\Data\InfoValidationService;
use Modules\Portal\Services\Validation\Data\InfoValidationsService;


class InfoService extends InfoValidationService
{

	public function rule($data, $index, $columns){
		return  [
			'id' =>	['integer', 'min:1', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'id', 0, $index-2), 'Duplicado')],
			'corporate_name' =>	['filled', 'string', 'max:191'],
			'fantasy_name' => 'nullable|string|max:191',
			'cpf_cnpj' => ['nullable', 'string', 'max:191', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'cpf_cnpj', 0, $index-2), 'Duplicado')],
			'buyer' => 'nullable|string|max:191',
			'email' => 'nullable|string|max:191',
			'phone' => 'nullable|string|max:191',
			'shipping_company_id' => 'nullable|integer|min:1',
			'street' =>	'nullable|string|max:191',
			'number' =>	'nullable|integer|min:0',
			'apartment' => 'nullable|string|max:191',
			'neighborhood' => 'nullable|string|max:191',
			'city' => 'nullable|string|max:191', 
			'st' =>	'nullable|string|max:2',
			'postcode' => 'nullable|string|max:8'
		];
	}

	public function modifiers($data)
	{
		return [
			['rule' => ['postcode' => ['filled']], 'filter' => 'removeAlphaCharacter']
		];
	}

	public function columnsFormat($header)
	{
		return [
			'corporate_name' => InfoValidationsService::STRING_FORMAT,
			'fantasy_name' => InfoValidationsService::STRING_FORMAT,
			'cpf_cnpj' => InfoValidationsService::STRING_FORMAT,
			'buyer' => InfoValidationsService::STRING_FORMAT,
			'email' => InfoValidationsService::STRING_FORMAT,
			'phone' => InfoValidationsService::STRING_FORMAT,
			'street' => InfoValidationsService::STRING_FORMAT,
			'apartment' => InfoValidationsService::STRING_FORMAT,
			'neighborhood' => InfoValidationsService::STRING_FORMAT,
			'city' => InfoValidationsService::STRING_FORMAT,
			'st' => InfoValidationsService::STRING_FORMAT,
			'postcode' => InfoValidationsService::STRING_FORMAT
		];
	}

}
