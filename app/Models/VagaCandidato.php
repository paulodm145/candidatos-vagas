<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VagaCandidato extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vaga_candidato';

    protected $primaryKey = 'id';

    protected $fillable = [
        'vaga_id',
        'candidato_id',
    ];

    public function vaga()
    {
        return $this->belongsTo(Vaga::class);
    }

    public function candidato()
    {
        return $this->belongsTo(Candidato::class);
    }
}
