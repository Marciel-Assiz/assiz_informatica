@extends('painel.templates.template')

@section('content-body')



<h1 class="title-pg">
    <a href="{{route('produtos.index')}}">
        <span class="glyphicon glyphicon-backward">Voltar</span>
    </a>
    
    Produto: <b>{{$produto->name}}</b></h1>
<p><b>Ativo:</b> {{$produto->active}}</p>
<p><b>Número:</b> {{$produto->number}}</p>
<p><b>Categoria:</b> {{$produto->category}}</p>
<p><b>Descrição:</b> {{$produto->description}}</p>

<hr>
@if( isset($errors) && count($errors) > 0 )
    
    <div class="alert alert-danger">
        @foreach( $errors->all() as $error )
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
<span>
    <form class="form all" method="post" action="{{route('produtos.destroy', $produto->id)}}">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger">Deletar Produto: {{$produto->name}}</button>
    </form>
</span>


@endsection