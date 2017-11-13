<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function model()
    {
        return Product::class;
    }

    public function dataSelect()
    {
        return $this->model->select(
            [
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                'id',
                'name',
                'brand_id',
                'date',
                'price',
                'special',
                'description',
                'status',
                'guarantee',
                'promotion',
            ]);
    }
}
