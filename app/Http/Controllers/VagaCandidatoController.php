<?php

namespace App\Http\Controllers;

use App\Http\Requests\VagaCandidatoRequest;
use App\Services\VagaCandidatoService;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class VagaCandidatoController extends BaseController
{
    public function __construct(VagaCandidatoRequest $request, VagaCandidatoService $service)
    {
        $this->setRequest($request);
        $this->setService($service);
    }
}
