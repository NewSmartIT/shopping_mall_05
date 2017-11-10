<?php

namespace App\Repositories\Eloquent;

use App\Models\Brand;
use App\Repositories\Contracts\BrandRepositoryInterface;

class BrandRepository extends Repository implements BrandRepositoryInterface
{
    public function model()
    {
        return Brand::class;
    }

    public function dataSelect($numrow)
    {
        return $this->model->select(
            [
                $numrow,
                'id',
                'name',
                'description',
            ]);
    }
}
