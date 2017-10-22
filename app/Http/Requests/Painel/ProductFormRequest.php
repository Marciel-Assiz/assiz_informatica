<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { 
    // Na linha abaixo se alterar para "false" o usuário do site não poderá fazer nem um formulário se quer.    
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|min:2|max:100',
            'number' => 'required|numeric',
            'category' => 'required|min:2',
            'description' => 'min:3|max:1000'
        ];
    }
    
    public function messages() {
        
        return
            [
                'name.required' => 'O campo [Nome:] é de preenchimento obrigatório !',
                'name.min' => 'O campo [Nome:] mínimo 2 Letras/Caracteres !',
                'number.required' => 'O campo [Número:] é de preenchimento obrigatório !',
                'number.numeric' => 'O campo [Número:] somente Números !',
                'category.required' => 'O campo [Categoria:] preenchimento obrigatório !'

            ];
    }
}
