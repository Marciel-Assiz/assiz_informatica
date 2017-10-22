<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;
use App\Http\Requests\Painel\ProductFormRequest;


class ProdutoController extends Controller
{
    private $produto; 
    
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //Equivale a uma instanciação de uma classe
    //(Produto $produto)
    //$produto = new Produto -> Instaciando e criando um novo obj, não mais necessário.
    {   
        //Dessa forma está mostrado produtos cadastrados
        //$produtos = $this->produto->all();
        
        //Dessa outra forma mostra apenas 6 itens usando paginate, posso passar o valor direto também ->paginate(10)
        $produtos = $this->produto->paginate(6);
      //$produtos = $this->produto(ProdutoMODEL)->paginação(6);  
        
        return view('painel.produtos.index', compact('produtos'));

    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = ['eletronicos','hardwares','softwares','dispositivos'];

        return view('painel.produtos.create-edit', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
    // EX DE COMO PEGAR OS DADOS DE UM FORM PELO REQUEST    
        //dd($request->all());
        //dd($request->only(['name','number']));
        //dd($request->except(['_token']));
        //dd($request->input('name'));

        $dataForm = $request->all();
        //dd($dataForm);
        $dataForm['active'] = (!isset($dataForm['active']) )? 0 : 1;

        // VALIDA OS DADOS AO SEREM INSERIDOS
        /*$messages = [
            'name.required' => 'O campo [Nome] é de preenchimento obrigatório !',
            'name.min' => 'O campo [Nome] mínimo 2 Letras/Caracteres !',
            'number.required' => 'O campo [Número] é de preenchimento obrigatório !',
            'number.numeric' => 'O campo [Número] somente Números !'
            
            ];
        
        $this->validate($request, $produto->rules, $messages);
        */

        // FAZ O CADASTRO
        $insert = $this->produto->create($dataForm);

        if($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->produto->find($id);
        
        $title = "Produto: {$produto->name}";
        //dd($pro->find($id)->name);
        return view('painel.produtos.show', compact('produto', 'title'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    
    // RECUPERA O PRODUTO PELO SEU ID    
        $produto = $this->produto->find($id);
        
        $title = "Editar Produto: {$produto->name}";
        $categorias = ['eletronicos','hardwares','softwares','dispositivos'];
    
        return view('painel.produtos.create-edit', compact('title', 'categorias', 'produto'));
        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
    //Nesse Métodoo 'update' só aceita _method do tipo 'PUT/PATH' e não 'get/post'.   
    //Recupera todos os dados do formulário       
        $dataForm = $request->all();
        
    //Recupera o item para editar
        $produto = $this->produto->find($id);
    
    //Verifica se o produto está aticado
        $dataForm['active'] = (!isset($dataForm['active']) )? 0 : 1;
               
    //Altera os itens    
        $update = $produto->update($dataForm);
        
    //Verifica se realmente editou    
        if($update)
            return redirect()->route ('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falha ao Editar']);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        
        $delete = $produto->delete();
        
        if($delete){
            return redirect()->route('produtos.index');
        }  else {
            return redirect()->route('produtos.show', $id)->with(['errors' => 'Falha ao deletar !']);
        }
    }

    public function tests()
    {
     
// METODO PARA DELETAR USANDO 'WHERE'
     /*   $product = new Produto;

        $delete = $product
                ->where('name', 'teste')
                ->delete();

        if($delete)
        return 'Deletado com Sucesso USANDO where !';
    else 
        return 'Falha na Alteração !';


//-----------------------------------------

// METODO PARA DELETAR PELO ID USANDO 'find()'
 /*       $product = new Produto;

        $delete = $product->find(4)->delete();

        if($delete)
        return 'Deletado com Sucesso !';
    else 
        return 'Falha na Alteração !';





//------------------------------------------

//*/// UPDATE USANDO 'VETOR' E 'WHERE 100%'  

  /*  $product = new Produto;

        $update = $product->where('id','=', 10)
                       ->update([
                        'name' => 'teste',
                        'description'=> 'delete()',
                        ]);

    if( $update )
        return 'Alterado com Sucesso !';
    else 
        return 'Falha na Alteração !';




//--------------------------------------------
    // BUSCA PELO $id USANDO '->find'

    /* $prod = new Produto;

        $upDateProd = $prod->find(5);
        dd($upDateProd->name);
//--------------------------------------------
      
    INSERÇÃO ALTERNATIVA NÃO USANDO ARRAY[]
    
        $prod->name       = 'Notebook acer 10';
        $prod->number     = '215545';
        $prod->active     = '1';
        $prod->category   = 'eletronicos';
        $prod->description= 'Notebook acer aspire one';

        $insert = $prod->save();*/

//-------------------------------------------
    

/*      INSERÇÃO COMUM USANDO ARRAY[]

    $insert = $prod->insert([
            'name'      => 'Notebook acer',
            'number'    => 665656,
            'active'    => true,
            'category'  => 'eletronicos',
            'description' => 'Descrição Note'
        ]);

    if( $insert )
        return 'Inserido com Sucesso !';
    else 
        return 'Falha na insersão !';
 
 //----------------------------------------*/       
// UPDATES ALTERNATIVA NÃO USANDO ARRAY[]

  /*      $up = $prod->find(4);
        $up->name       = 'Td certo';
        $up->number     = '215545';
        $up->active     = '1';
        $up->category   = 'eletronicos';
        $up->description= 'Notebook acer aspire one Update';
        $update = $up->save();

        if( $update )
        return 'Alterado com Sucesso !';
    else 
        return 'Falha na Alteração !';

// UPDATES ALTERNATIVA USANDO ARRAY[]
// AINDA SEM ÊXITO ESSE MÉTODO, NÃO USAR
 /*       
        $up = $prod->find(4);
        //dd($up);
        $updat = $up->update([
            'name' => 'update2 kjshiu',
            'category'  => 'eletronicos',
        ]);
        //dd($prod);

        if( $update )
        return 'Alterado com Sucesso !';
    else 
        return 'Falha na Alteração !';

        // UPDATES USANDO 'WHERE' USANDO ARRAY[]
// AINDA SEM ÊXITO ESSE MÉTODO, NÃO USAR */
        
        $insert = $this->produto->create([
               'name'           =>  'Nome Do Produto 2',
                'number'        =>  356666,
                'active'        =>  true,
                'category'      =>  'eletronicos',
                'description'   =>  'Descrição vem aqui'
            ]);
        if($insert)
            return 'Inserido com sucesso';
        else
            return 'Falha ao inserir';

    }

}
