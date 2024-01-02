<?php

namespace App\Services\Kategori;

use App\Models\Kategori;
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
    public function getById(Kategori $kategori){
      return $this->mainRepository->getById($kategori);
    }
    public function create($data){
      return $this->mainRepository->create($data);
    }
    public function updateBinding(Kategori $kategori, $data){
      return $this->mainRepository->updateBinding($kategori, $data);
    }
    public function deleteBinding(Kategori $kategori){
      return $this->mainRepository->deleteBinding($kategori);
    }

    // Define your custom methods :)
}
