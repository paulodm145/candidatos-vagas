<?php

namespace App\Repository;

use App\Models\Vaga;

class VagaRepository extends BaseRepository
{
    public function __construct(Vaga $model)
    {
        parent::__construct($model);
    }

}
