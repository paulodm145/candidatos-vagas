<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getAll(array $filters = [], int $perPage = 5, string $sortField = 'id', string $sortDirection = 'asc')
    {
//        $teste = '';
//        foreach ($filters as $key => $value) {
//            $teste .=  $filters[$key][0]. ' - ' . $filters[$key][1] . '<br>';
//        }
//
//        dd($teste);

        $query = $this->model->query();

        foreach ($filters as $key => $value) {
            $query->where($filters[$key][0], $filters[$key][1], $filters[$key][2]);
        }

        $query->orderBy($sortField, $sortDirection)->get();

        return $query->paginate($perPage);
    }

    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->getById($id);
        $model->update($data);
        return $model;
    }
    public function delete($id)
    {
        $model = $this->getById($id);
        $model->delete();
        return $model;
    }

    public function massDelete(array $ids)
    {
        return $this->model->whereIn('id', $ids)->delete();
    }

    public function search($field, $value, $perPage = 20)
    {
        return $this->model->where($field, $value)->paginate($perPage);
    }

}
