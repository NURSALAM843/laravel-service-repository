<?php

namespace App\Services\Kategori;

use LaravelEasyRepository\BaseService;

interface KategoriService extends BaseService{

    // Write something awesome :)

    public function getAll();
    public function getById($id);
}