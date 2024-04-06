<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\LSPModel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsp = LSPModel::all();
        return view('Admin.lsp.lsp',compact('lsp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.lsp.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'idLoaiSP' => $request->input('idLoaiSP'),
            'tenLoaiSP' => $request->input('tenLoaiSP'),
            'Status' => $request->input('Status') ? 1 : 0,
            'mota' => $request->input('mota'),
        ];
        LSPModel::create($data);
        return redirect()->route('index')->with('success','Thêm thành công loại sản phẩm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idLoaiSP)
    {
        $lsp = LSPModel::where('idLoaiSP', $idLoaiSP)->first();
        if(!$lsp){
            // xử lý khi không tìm thấy loại sản phẩm với id tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $idLoaiSP = $lsp->idLoaiSP;
        $tenLoaiSP = $lsp->tenLoaiSP;
        $Status = $lsp->Status;
        $mota = $lsp->mota;
        return view('Admin.lsp.detail', compact('idLoaiSP','tenLoaiSP', 'mota', 'Status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, string $idLoaiSP)
    {
        $lsp = LSPModel::where('idLoaiSP', $idLoaiSP)->first();
        if(!$lsp){
            return abort(404);
        }
        return view('Admin.lsp.edit',compact('lsp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $idLoaiSP)
    {
        $lsp = LSPModel::find($idLoaiSP);
        if(!$lsp){
            return abort(404);
        }
        $request->validate([

        ]);
        $lsp->tenLoaiSP = $request->tenLoaiSP;
        $lsp->Status = $request->Status;
        $lsp->mota = $request->mota;
        $lsp->save();
        return redirect()->route('index',['idLoaiSP' =>$idLoaiSP])->with('success','Loại sản phẩm đã được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $idLoaiSP)
    {
        $lsp = LSPModel::find($idLoaiSP);
        $lsp->delete();
        return redirect()->route('index')->with('success', 'Xóa thành công');
    }
}
