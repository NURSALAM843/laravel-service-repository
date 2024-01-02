<?php

namespace App\Repositories\Kategori;

use App\Http\Requests\Backoffice\KategoriRequest;
use App\Models\Kategori;
use LaravelEasyRepository\Repository;

interface KategoriRepository extends Repository{

    // Write something awesome :)


    public function getALl($request);
    public function getById(Kategori $kategori);
    public function updateBinding(Kategori $kategori, $data);
    public function deleteBinding(Kategori $kategori);
}
