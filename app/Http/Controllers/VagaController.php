<?php

namespace App\Http\Controllers;

use App\Http\Requests\VagaRequest;
use App\Services\VagaService;
use Illuminate\Http\Request;

class VagaController extends BaseController
{
    public function __construct(VagaRequest $request, VagaService $service)
    {
        $this->setRequest($request);
        $this->setService($service);
    }
}
