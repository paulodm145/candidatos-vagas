<?php

namespace App\Services;


use App\Repository\VagaRepository;

class VagaService extends BaseService
{
    public function __construct(VagaRepository $vagaRepository)
    {
        parent::__construct($vagaRepository);
    }

}
