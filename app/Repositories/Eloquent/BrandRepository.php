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
}
