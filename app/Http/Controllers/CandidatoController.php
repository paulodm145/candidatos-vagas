<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Services\CandidatoService;
use Illuminate\Http\Request;

class CandidatoController extends BaseController
{
    public function __construct(CandidatoRequest $request, CandidatoService $service)
    {
       $this->setRequest($request);
       $this->setService($service);
    }

}
