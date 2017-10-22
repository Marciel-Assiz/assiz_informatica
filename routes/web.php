<?php
/**
NESSA LINHA ABAIXO TODAS REQUISIÇÕES QUE PASSARÁ POR 'painel' TERÁ UM FILTRO ANTES 'MIDDLEWARE'
*/
Route::group(['namespace' => 'Painel'], function() {
	Route::get('painel', 'PainelController@index')->middleware('auth');
});

Route::get('/login', function(){
	return 'Página de Login';
});

Route::get('/painel/produtos/tests', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');
Route::post('/painel/produtos/store', 'Painel\ProdutoController@store');
Route::post('/contato/store', 'Site\SiteController@store');


Route::group(['namespace' => 'Site'], function(){
	Route::get('/', 'SiteController@index');
	Route::get('/sobre', 'SiteController@sobre');
	Route::get('/servicos', 'SiteController@servicos');
	Route::get('/contato', 'SiteController@contato');
	Route::get('/contato/store', 'SiteController@store');
        Route::post('/alugue1neto/store', 'Alugue1NetoController@a1n_store');
	Route::get('/contato/mostrar-contato', 'SiteController@mostrarContato');
	Route::get('/alugue1neto', 'Alugue1NetoController@alugue1neto');
	Route::get('/formcontato', 'Alugue1NetoController@formContato');
	Route::post('/enviarcontato', 'Alugue1NetoController@enviarContato');
	Route::get('/alugue1neto/pedidos_show', 'Alugue1NetoController@pedidosShow');
});

//na linha abaixo está chamando a rota com passagem de parâmetro
Route::get('/categoria/{id?}', 'Site\SiteController@categoria');

/**
*Não está usando a function abaixo, e sim jogando para o Controller/SiteController@index
**/
Route::get('/mostrar-contato', function () {
    return view('mostrar-contato');
});

Route::get('mostrar-estado', 'EstadoCidadeBairroController@mostrarEstado');
Route::get('estado-inserir', 'EstadoCidadeBairroController@estadoInserir');
Route::get('estado-inverso', 'EstadoCidadeBairroController@mostrarEstadoInverse');

/* ***************** INICIO CONFIG ALUGUE 1 NETO ************************
 * One To Many (Um para muitos) 
 *///metodo->get('nomeDaRota', 'nomeController@nomeMetodo');
//$this->get('showServicos', 'showServicosController@showServicos');


//***************** FIM CONFIG ALUGUE 1 NETO ************************

Auth::routes();

Route::get('/home', 'HomeController@index');
