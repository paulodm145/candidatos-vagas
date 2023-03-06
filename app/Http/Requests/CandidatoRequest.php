<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoRequest extends BaseRequest
{
    /**
     * Regras de validação simples para quando o método for get
     * @var string[]
     */
    protected $get_rules = [];

    /**
     * Regras de validação simples para quando o método for post
     * @var string[]
     */
    protected $post_rules = [
        'nome' => 'required|string',
        'telefone' => 'required|string',
        'email' => 'required|string|email'
    ];

    /**
     * Regras de validação simples para quando o método for put
     * @var string[]
     */
    protected $put_rules = [];

    /**
     * Regras de validação simples para quando o método for delete
     * @var string[]
     */
    protected $delete_rules = [];

    /**
     * Formatação da nomenclarura legível dos campos
     * @var string[]
     */
    protected $format_attributes = [
        'nome'      => 'Nome',
        'telefone'  => 'telefone',
        'email'     => 'email'
    ];

}
