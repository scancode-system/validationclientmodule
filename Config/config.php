<?php

return [
	'name' => 'ValidationClient', 
	'fields' => ['id', 'corporate_name', 'fantasy_name', 'cpf_cnpj', 'buyer', 'email', 'phone', 'shipping_company_id', 'street', 'number', 'apartment', 'neighborhood', 'city', 'st', 'postcode'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código do cliente.',
			'filled' => false
		], 
		[
			'name' => 'corporate_name',
			'observation' => 'Razão social do cliente.',
			'filled' => true
		], 
		[
			'name' => 'fantasy_name',
			'observation' => 'Nome fantasia do cliente.',
			'filled' => false
		], 
		[
			'name' => 'cpf_cnpj',
			'observation' => 'CPF caso seja pessoa física ou CNPJ para pessoa jurídica',
			'filled' => false
		], 
		[
			'name' => 'buyer',
			'observation' => 'Nome da pessoa física que esta realizadno o pedido na feira.',
			'filled' => false
		], 
		[
			'name' => 'email',
			'observation' => 'Email do cliente.',
			'filled' => false
		], 
		[
			'name' => 'phone',
			'observation' => 'Telefone do cliente.',
			'filled' => false
		], 
		[
			'name' => 'shipping_company_id',
			'observation' => 'Código da transportadora.',
			'filled' => false
		], 
		[
			'name' => 'street',
			'observation' => 'Nome da rua ou avenida.',
			'filled' => false
		], 
		[
			'name' => 'number',
			'observation' => 'Número da rua ou avenida.',
			'filled' => false
		], 
		[
			'name' => 'apartment',
			'observation' => 'Complemento do endereço.',
			'filled' => false
		], 
		[
			'name' => 'neighborhood',
			'observation' => 'Nome do bairro.',
			'filled' => false
		], 
		[
			'name' => 'city',
			'observation' => 'Nome da cidade.',
			'filled' => false
		], 
		[
			'name' => 'st',
			'observation' => 'Sigla do estado.',
			'filled' => false
		], 
		[
			'name' => 'postcode',
			'observation' => 'CEP.',
			'filled' => false
		]
	]
];

