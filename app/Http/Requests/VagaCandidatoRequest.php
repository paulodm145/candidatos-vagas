<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VagaCandidatoRequest extends BaseRequest
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
        'candidato_id' => 'required|integer',
        'vaga_id' => 'required|integer',
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
        'candidato_id' => 'Id do candidato',
        'vaga_id'      => 'Id da vaga',
    ];

}
