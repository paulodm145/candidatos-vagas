<?php

namespace App\Repository;

use App\Models\VagaCandidato;

class VagaCandidatoRepository extends BaseRepository
{
    public function __construct(VagaCandidato $model)
    {
        parent::__construct($model);
    }
}
