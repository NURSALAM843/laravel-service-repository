<?php

namespace App\Repositories\Kategori;

use App\Http\Requests\Backoffice\KategoriRequest;
use LaravelEasyRepository\Repository;

interface KategoriRepository extends Repository{

    // Write something awesome :)


    public function getALl();
    public function getById($id);
}