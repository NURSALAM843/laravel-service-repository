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


    public function getAll($request){
        return $this->model->latest()->filter($request)->paginate(30)->withQueryString();
    }
    
    public function createBinding($request){
        return $this->model->create([
            'nama'  => $request->nama
        ]);
    }
    public function getById(Kategori $kategori){
        return $kategori;
    }
    public function updateBinding(Kategori $kategori, $request){
        return $kategori->update([
            'nama'  => $request->nama
        ]);
    }

    public function deleteBinding(Kategori $kategori){
        return $kategori->delete();
    }

}

