<?php

namespace App\Services;


use App\Repository\VagaCandidatoRepository;
use App\Repository\VagaRepository;

class VagaCandidatoService extends BaseService
{
    public function __construct(VagaCandidatoRepository $repository)
    {
        parent::__construct($repository);
    }
}
