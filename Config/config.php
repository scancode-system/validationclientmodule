<?php

return [
	'name' => 'ValidationClient', 
	'fields' => ['id', 'corporate_name', 'fantasy_name', 'cpf_cnpj', 'buyer', 'email', 'phone', 'shipping_company_id', 'street', 'number', 'apartment', 'neighborhood', 'city', 'st', 'postcode'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código do cliente.',
			'sample_1' => '1292',
			'filled' => false
		], 
		[
			'name' => 'corporate_name',
			'observation' => 'Razão social do cliente.',
			'sample_1' => 'Take Studio',
			'filled' => true
		], 
		[
			'name' => 'fantasy_name',
			'observation' => 'take studio desing',
			'sample_1' => '1292',
			'filled' => false
		], 
		[
			'name' => 'cpf_cnpj',
			'observation' => 'CPF caso seja pessoa física ou CNPJ para pessoa jurídica',
			'sample_1' => '23234543000123',
			'filled' => false
		], 
		[
			'name' => 'buyer',
			'observation' => 'Nome da pessoa física que esta realizadno o pedido na feira.',
			'sample_1' => 'pedro',
			'filled' => false
		], 
		[
			'name' => 'email',
			'observation' => 'Email do cliente.',
			'sample_1' => 'pedrotorres@gmail.com',
			'filled' => false
		], 
		[
			'name' => 'phone',
			'observation' => 'Telefone do cliente.',
			'sample_1' => '(11)98306-2282',
			'filled' => false
		], 
		[
			'name' => 'shipping_company_id',
			'observation' => 'Código da transportadora.',
			'sample_1' => '12',
			'filled' => false
		], 
		[
			'name' => 'street',
			'observation' => 'Nome da rua ou avenida.',
			'sample_1' => 'rua da fonte',
			'filled' => false
		], 
		[
			'name' => 'number',
			'observation' => 'Número da rua ou avenida.',
			'sample_1' => '18',
			'filled' => false
		], 
		[
			'name' => 'apartment',
			'observation' => 'Complemento do endereço.',
			'sample_1' => 'casa',
			'filled' => false
		], 
		[
			'name' => 'neighborhood',
			'observation' => 'Nome do bairro.',
			'sample_1' => 'jardim represa',
			'filled' => false
		], 
		[
			'name' => 'city',
			'observation' => 'Nome da cidade.',
			'sample_1' => 'sbc',
			'filled' => false
		], 
		[
			'name' => 'st',
			'observation' => 'Sigla do estado.',
			'sample_1' => 'sp',
			'filled' => false
		], 
		[
			'name' => 'postcode',
			'observation' => 'CEP.',
			'sample_1' => '9843260',
			'filled' => false
		]
	]
];

