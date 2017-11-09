<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BrandRepositoryInterface as BrandRepository;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BrandController extends Controller
{
    private $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function index()
    {
        return view('backend.brands.index');
    }

    public function data_json(Request $request)
    {
        $where = [];
        if($request->search['custom']['name']) {
           $where[]= ['name', 'like', '%'.trim($request->search['custom']['name']).'%'];
        }
        DB::statement(DB::raw('set @rownum=0'));

        $brands = $this->brandRepository->dataSelect(DB::raw('@rownum  := @rownum  + 1 AS rownum'))
        ->where($where);

        $datatables = DataTables::of($brands)
            ->addColumn('checkbox', function ($data) {})
            ->addColumn('action', function ($data) {})
            ->rawColumns(['rownum', 'checkbox', 'action']);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);
    }
}
