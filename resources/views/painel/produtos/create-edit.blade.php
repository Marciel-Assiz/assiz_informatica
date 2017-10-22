
@extends('painel.templates.template')


@section('content-body')


<h1 class="title-pg">
    <a href="{{route('produtos.index')}}">
        <span class="glyphicon glyphicon-backward">Voltar</span>
    </a>
    Gestão Produto: <b>{{$produto->name or 'Novo'}}</b>
</h1>

@if( isset($errors) && count($errors) > 0 )
    
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error )
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
    
@if( isset($produto) )
<form class="form all" method="post" action="{{route('produtos.update', $produto->id)}}">
        {!! method_field('PUT') !!}
@else
    <form class="form all" method="post" action="{{route('produtos.store')}}">
@endif
        {!! csrf_field() !!}
   
	<div class="form-group">    <!-- Na Linha abaixo está fazendo uma verificação se exite a variavel $produto->name ou parmanece old('name') -->
            <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{$produto->name or old('name')}}">
	
        
        </div>
	<div class="form-group">
	<label>
		<input type="checkbox" name="active" value="1" @if( isset($produto) && $produto->active == '1') checked @endif()  
		class="form-control">
		Ativo ?
	</label>
	</div>
	<div class="form-group">
	<input type="text" name="number" placeholder="Número:" class="form-control" value="{{$produto->number or old('number')}}">
	</div>
	<div class="form-group">
	<select name="category" class="form-control">
		<option>Escolha a Categoria</option>
		@foreach($categorias as $category)
			<option
				value="{{$category}}"
                                @if( isset($produto) && $produto->category == $category )
                                    selected
                                @endif
                                >{{$category}}
			</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
	<textarea name="description" placeholder="Descrição do Produto" class="form-control">{{$produto->description or old('description')}}</textarea>
	</div>

	<button class="btn btn-primary">Enviar</button>
</form>

@endsection