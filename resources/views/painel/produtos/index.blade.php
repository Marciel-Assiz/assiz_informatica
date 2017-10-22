@extends('painel.templates.template')

@section('content-title')
	Listagem dos Produtos
@endsection

@section('content-body')
	<h1 class="title-pg">Listagem dos Produtos</h1>

	<a href="{{route('produtos.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
</p>
<table class="table table-striped">

	<tr>
		<th>Nome</th>
		<th>Descrição</th>
		<th width="100px">Ações</th>
	</tr>
	@foreach($produtos as $produto)
	<tr>
		<td>{{$produto->name}}</td>
		<td>{{$produto->description}}</td>
		<td>
			<a href="{{route('produtos.edit', $produto->id)}}" class="acoes editar">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<a href="{{route('produtos.show', $produto->id)}}" class="acoes apagar">
				<span class="glyphicon glyphicon-eye-open"></span></a>
		</td>
	</tr>
	@endforeach
</table>

{{$produtos->links()}}

@endsection