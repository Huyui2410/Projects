<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Session;

class DanhMucController extends Controller
{
    //

    public function __construct()
    {
        $this->viewprefix='admin.danhmuc.';
        $this->viewnamespace='admin/danhmuc';
    }
    public function index()
    {
        $danhmucs = DanhMuc::all();
        return view($this->viewprefix.'index', compact('danhmucs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    public function create()
    {
        //
        return view($this->viewprefix.'create');
    }

    public function store(Request $request)
    {
        //
        $danhmuc= new DanhMuc();
        $validator = Validator::make($request->all(), [
            'TenDanhMuc'=>'required',
            'TrangThai' => 'required',
           
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }
        $danhmuc->TenDanhMuc=$request->TenDanhMuc;
        $danhmuc->TrangThai=$request->TrangThai;
        
        //if(Category::create($request->all()))
        if($danhmuc->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }

    public function edit($id)
    {
        $danhmuc=DanhMuc::find($id);
        return view($this->viewprefix.'edit')->with('danhmuc', $danhmuc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DanhMuc  
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $danhmuc=DanhMuc::find($id);
        $data=Validator::make($request->all(), [
            
            'TenDanhMuc' => 'required',
            'TrangThai' => 'required',
           
        ]);    
        if ($data->fails()) {
            return redirect()->back()
                             ->withErrors($data)
                             ->withInput();
        }
        
        if($danhmuc->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
    public function destroy($id)
    {
        $danhmuc=DanhMuc::find($id);
    
        if($danhmuc->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
   
    
    
}
