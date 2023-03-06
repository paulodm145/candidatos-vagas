<?php

namespace App\Services;

use App\Repository\CandidatoRepository;

class CandidatoService extends BaseService
{
    public function __construct(CandidatoRepository $candidatoRepository)
    {
        parent::__construct($candidatoRepository);
    }

}
