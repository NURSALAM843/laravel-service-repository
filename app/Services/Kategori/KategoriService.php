<?php

namespace App\Services\Kategori;

use App\Http\Requests\Backoffice\KategoriRequest;
use App\Models\Kategori;
use LaravelEasyRepository\BaseService;

interface KategoriService extends BaseService{

    // Write something awesome :)

    public function getAll($request);
    public function getById(Kategori $kategori);
    public function updateBinding(Kategori $kategori, KategoriRequest $request);
    public function deleteBinding(Kategori $kategori);
    public function createBinding(KategoriRequest $request);
}
