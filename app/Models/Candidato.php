<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    protected $appends = [
        'vagas_descricao',
        'telefone_descricao'
    ];

    public function getTelefoneDescricaoAttribute($value)
    {
        return preg_replace('/[^0-9]/', '', $this->attributes['telefone']);
    }

    public function getTelefoneAttribute($value)
    {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $value);
    }

    public function getVagasDescricaoAttribute()
    {
        return $this->vagas->pluck('descricao')->toArray();
    }

    public function vagas()
    {
        return $this->belongsToMany(Vaga::class, 'vaga_candidato', 'candidato_id', 'vaga_id');
    }

}
