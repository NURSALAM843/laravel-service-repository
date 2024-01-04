<?php

namespace App\Services\Kategori;

use App\Http\Requests\Backoffice\KategoriRequest;
use App\Models\Kategori;
use LaravelEasyRepository\Service;
use App\Repositories\Kategori\KategoriRepository;
use DB;
use Exception;

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
      $data = $this->mainRepository->getALl($request);

      // $result = [];

      // foreach ($data as $key => $value) {
      //   $result[] = $value;
      // }

      // $result = $data->map(function($item){
      //   return [
      //     'id' => $item->id,
      //     'nama' => $item->nama
      //   ];
      // });
      return $data;
    }
    public function getById(Kategori $kategori){
      return $this->mainRepository->getById($kategori);
    }
    public function createBinding(KategoriRequest $request){
      
      DB::beginTransaction();
      try {
          $this->mainRepository->createBinding($request);
          DB::commit();

          return [
            'success' => true,
            'message' => 'Data Berhasil Di Tambahkan',
            'type' => 'success',
        ];

      } catch (Exception $e) {
          DB::rollBack();
          return [
            'success' => false,
            'message' => $e->getMessage(),
            'type' => 'danger',
        ];
         
      }
    }
    public function updateBinding(Kategori $kategori,KategoriRequest $request){
      DB::beginTransaction();
      try {
          $this->mainRepository->updateBinding($kategori, $request);
          DB::commit();

          return [
            'success' => true,
            'message' => 'Data Berhasil Di Ubah',
            'type' => 'success',
        ];

      } catch (Exception $e) {
          DB::rollBack();
          return [
            'success' => false,
            'message' => $e->getMessage(),
            'type' => 'danger',
        ];
         
      }
    }
    public function deleteBinding(Kategori $kategori){

      DB::beginTransaction();
      try {
          $this->mainRepository->deleteBinding($kategori);
          DB::commit();

          return [
            'success' => true,
            'message' => 'Data Berhasil Dihapus',
            'type' => 'success',
        ];

      } catch (Exception $e) {
          DB::rollBack();
          return [
            'success' => false,
            'message' => "Gagal Hapus Data!",
            'type' => 'danger',
        ];
         
      }

    }

    // Define your custom methods :)
}
