<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

abstract class BaseController extends Controller
{
    protected $service;

    private $request;

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    protected function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    protected function setRequest($request)
    {
        $this->validate($request, $request->rules());
        $this->request = $request;
        return $this;
    }

    public function index(Request $request)
    {
        try {
            return response()->json($this->service->getAll($this->request->all()));
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $data = $this->service->getById($id);
            return response()->json($data);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => "registro não encontrado"], 404);
        }
    }

    public function store()
    {
        try {
            $data = $this->request->all();
            $data = $this->service->create($data);
            return response()->json($data, 201);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => "Falha ao criar registro"], 500);
        }
    }

    public function update($id)
    {
        try {
            return response()->json($this->service->update($id, $this->request->all()), 200);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => "Falha ao atualizar registro"], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->delete($id);
            return response()->json([], 204);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => "Falha ao deletar registro"], 500);
        }
    }

    public function massDestroy()
    {
        try {
            $ids = explode(',', $this->request->all()['ids']);
            $this->service->massDelete($ids);
            return response()->json([], 204);
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
            return response()->json(['message' => "Falha ao deletar registro"], 500);
        }
    }

}
