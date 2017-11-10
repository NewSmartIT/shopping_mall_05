<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BrandRepositoryInterface as BrandRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
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

    public function dataJson(Request $request)
    {
        $where = [];
        if($request->search['custom']['name']) {
           $where[]= ['name', 'like', '%'.trim($request->search['custom']['name']).'%'];
        }
        DB::statement(DB::raw('set @rownum=0'));

        $brands = $this->brandRepository->dataSelect(DB::raw('@rownum  := @rownum  + 1 AS rownum'))
        ->where($where);

        $datatables = DataTables::of($brands)
            ->addColumn('checkbox', function ($data) {
                return view('backend.common.checkbox', ['id' => $data->id]);
            })
            ->addColumn('action', function ($data) {
                return view('backend.common.btn-action', ['destroy' => route('admin.brand.destroy', $data->id)]);
            })
            ->rawColumns(['rownum', 'checkbox', 'action']);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        return $datatables->make(true);
    }

    public function destroy($id)
    {
        try {
            $this->brandRepository->destroy($id);
            return Response::json([
                'error' => 0,
                'message' => 'Successfully deleted 1 record'
            ]);
        }catch (QueryException $e) {
            return Response::json([
                'error' => 1,
                'message' => $e
            ]);
        }

    }

    public function brandDeletes(Request $request)
    {
        try {
            $this->brandRepository->manyDelete($request->ids);
            return Response::json([
                'error' => 0,
                'message' => 'Successfully deleted '.count($request->ids).' record'
            ]);
        }catch (QueryException $e) {
            return Response::json([
                'error' => 1,
                'message' => $e
            ]);
        }
    }
}
