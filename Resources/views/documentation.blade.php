@extends('portal::layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card bg-light">
					<div class="card-header">Informações iniciais</div>
					<div class="card-body">
						<p class="card-text">
							No Portal online da Scancode, poderá preparar seu sistema para o ambiente de produção (feira), de forma que o sistema trabalhe com dados integros e sem corromper o sistema.
							Aqui no portal poderá validar os seu sistema ERP de forma que corresponde eficientemente com o nosso sistema, com esta documentação será demonstrado a estrutura necessária para a importação e como estas dados devem ser formatados.
						</p>
						<a href="{{ route('portal.doc.download.sample', $event_validation) }}" class="btn btn-primary">Arquivo de clientes com exemplos</a>
					</div>
				</div>
				<h1 class="mb-3">Validação de Clientes</h1>
				<ul>
					<li class="mb-2"><span class="font-weight-bold">Extensão do Arquivo:</span> Os arquivos devem ter o formato de planiha Excel Micorsoft Word com a extensção "xlsx"</li>
					<li class="mb-2">
						<span class="font-weight-bold">Primeira Linha:</span> A primeira linha do arquivo será o <span class="font-weight-bold">cabeçalho</span>, cada coluna conterá um cabeçalho indicando uma determinada propriedade do cliente. Atenção quanto a formalização do cabeçalho, todao cabeçalho segue a formatação <i>snake case</i>, isto é letras são em minúsculas é permitido número e cabeçalho com palavras duplas são separadas por underscore "_".
					</li>
					<li class="mb-2"><span class="font-weight-bold">Linhas de registro:</span> Após o cabeçalho, toda linha representará um registro único do seu cliente, não há um número limite de clientes para o arquivo, coloque quantos clientes forem necessários, preenchendo de acordo com co cabeçalho.</li>
					<li class="mb-2"><span class="font-weight-bold">Formatação:</span> Toda coluna segue uma determinada formatação, podendo ser alfanúmerica, numérico, número inteiro ou apenas números positivos e até mesmo formatação de data.</li>
				</ul>
				<hr>
				<h1 class="mb-3">Colunas do Cabeçalho</h1>
				<p>
					A seguir é listado todas as colunas com seus respectivos cabeçalhos com as formatações necessárias e propriedades.
				</p>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="font-weight-bold">id_cliente</span> - [opicional, não pode ser vazio, inteiro, valor mínimo 1, único para cada registo]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">nome_fantasia</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">razao_social</span> - [opicional, não pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">cpf_cnpj</span> - [opicional, pode ser vazio, texto, máximo 18 caracteres, único por registro]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">inscricao_estadual</span> - [opicional, pode ser vazio, texto, máximo 100 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">nome_contato</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">nome_comprador</span> - [opicional, pode ser vazio, texto, máximo 30 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">email</span> - [opicional, pode ser vazio, texto, máximo 60 caracteres, formatação padrão de email]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">tel_1</span> - [opicional, pode ser vazio, texto, máximo 15 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">tel_2</span> - [opicional, pode ser vazio, texto, máximo 15 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">observacao</span> - [opicional, pode ser vazio, texto]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">varejo</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">logradouro</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">bairro</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">cidade</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">uf</span> - [opicional, pode ser vazio, texto, máximo 2 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">cep</span> - [opicional, pode ser vazio, texto, máximo 10 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">cliente_status</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
					<li class="list-group-item">
						<span class="font-weight-bold">transportadora</span> - [opicional, pode ser vazio, texto, máximo 255 caracteres]
					</li>
				</ul>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('portal.dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ route('portal.main', 1) }}">Painel Central - Importar e Validar</a>
</li>
<li class="breadcrumb-item text-capitalize">Documentação de {{ $event_validation->validation->alias }}</li>
@endsection