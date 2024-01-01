<?php

namespace App\Services\Kategori;

use LaravelEasyRepository\Service;
use App\Repositories\Kategori\KategoriRepository;

class KategoriServiceImplement extends Service implements KategoriService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(KategoriRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }


    public function getAll($request){
      return $this->mainRepository->getALl($request);
    }
    public function getById($id){
      return $this->mainRepository->getById($id);
    }
    public function create($data){
      return $this->mainRepository->create($data);
    }
    public function update($id,$data){
      return $this->mainRepository->update($id, $data);
    }
    public function delete($id){
      return $this->mainRepository->delete($id);
    }

    // Define your custom methods :)
}
