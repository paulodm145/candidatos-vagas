<?php

namespace App\Repository;

use App\Models\Candidato;

class CandidatoRepository extends BaseRepository
{

    public function __construct(Candidato $model)
    {
        parent::__construct($model);
    }

}
