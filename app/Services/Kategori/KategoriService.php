<?php

namespace App\Services\Kategori;

use App\Models\Kategori;
use LaravelEasyRepository\BaseService;

interface KategoriService extends BaseService{

    // Write something awesome :)

    public function getAll($request);
    public function getById(Kategori $kategori);
    public function updateBinding(Kategori $kategori, $data);
    public function deleteBinding(Kategori $kategori);
}
