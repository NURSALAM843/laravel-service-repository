<?php

namespace App\Repositories\Kategori;

use App\Models\Kategori;
use App\Http\Requests\Backoffice\KategoriRequest;
use LaravelEasyRepository\Implementations\Eloquent;
use DB;
use Exception;

class KategoriRepositoryImplement extends Eloquent implements KategoriRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Kategori $model)
    {
        $this->model = $model;
    }


    public function getAll(){
        return $this->model->latest()->paginate(30)->withQueryString();
    }
    
    public function create($data){
        return $this->model->create([
            'nama'  => $data->nama
        ]);
    }
    public function getById($id){
        return $this->model->where('id', $id)->first();
    }
    public function update($id, $data){
        return $this->model->where('id', $id)->first()->update([
            'nama'  => $data->nama
        ]);
    }


    public function delete($id){
        return $this->model->where('id', $id)->first()->delete();
    }

    // Write something awesome :)
}

