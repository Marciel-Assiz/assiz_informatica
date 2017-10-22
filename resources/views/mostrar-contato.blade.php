@extends('templates.template')

@section('content-body')
<h1>Listagem dos Contatos</h1>

<table>
    <tr>
        <td>Nome</td>
        <td>Email</td> 
    </tr>
    @foreach($contatos as $contato)
    <tr>
        <td>{{$contato->nome}}</td>
        <td>{{$contato->email}}</td>
    </tr>
    
    @endforeach
</table>
@endsection
<!-->
        
<h1>Teste</h1>