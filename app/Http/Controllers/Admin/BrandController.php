<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brand::paginate(2);
        return view('Backend.Brand.brand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $request->all();
        Brand::create($result);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::where('id',$id)->get();
        return view('Backend.Brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = [
            'brand_name' => $request->get('brand_name'),
            'brand_desc' => $request->get('brand_desc'),
        ];
        brand::where('id',$id)->update($result);
        return redirect()->to('admin/brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        brand::where('id',$id)->delete();
        return redirect()->back();
    }

    public function unactive($id)
    {
        // dd(1);
        DB::table('brand')->where('id',$id)->update(['brand_status' => 1 ]);
        return redirect()->back()->with('success',__('Không kích hoạt danh mục'));
    }
    public function active($id)
    {
        DB::table('brand')->where('id',$id)->update(['brand_status' => 0 ]);
        return redirect()->back()->with('success',__('Kích hoạt danh mục'));
    }
}
