<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ProductRepositoryInterface as ProductRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return view('backend.product.index');
    }

    public function dataJson(Request $request)
    {
        $where = [];
        if ($request->search['custom']['name']) {
           $where[]= ['name', 'like', '%' . trim($request->search['custom']['name']) . '%'];
        }
        DB::statement(DB::raw('set @rownum=0'));

        $products = $this->productRepository->dataSelect()
        ->where($where);

        $datatables = DataTables::of($products)
            ->addColumn('checkbox', function ($data) {
                return view('backend.common.checkbox', ['id' => $data->id]);
            })
            ->addColumn('action', function ($data) {
                return view('backend.common.btn-action', [
                    'destroy' => route('admin.brand.destroy', $data->id),
                    'edit' => route('admin.brand.fillData', $data->id)
                ]);
            })
            ->rawColumns(['rownum', 'checkbox', 'action']);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);
    }
}
