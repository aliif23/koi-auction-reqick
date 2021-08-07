<?php

namespace App\Http\Controllers;

use App\Models\KoiDFilter;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KoiDFilterController extends Controller
{
    public function index(){
        $koidfilters = KoiDFilter::all();

        return view('koi.products.koidfilter',[
            "koidfilters" => $koidfilters
        ]);
    }

    public function indexadmin(){
        $koidfilters = KoiDFilter::all();

        return view('admin.tables.koidfiltertables',[
            "koidfilters" => $koidfilters
        ]);
    }

    public function showadmin($id){
        $koidfilter = KoiDFilter::findOrFail($id);

        return view('admin.details.koidfilter',[
            "koidfilter" => $koidfilter
        ]);
    }

    public function create(Request $request){
        $koidfilter = new KoiDFilter();

        $koidfilter->nama = request('nama');
        $koidfilter->price = request('price');
        $koidfilter->size = request('size');
        $koidfilter->desc = request('desc');
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('img/products/koidfilter/',$filename);
        $koidfilter->gambar = $filename;

        $koidfilter->save();

        return redirect('/admin/tables/koidfilter')->with('mssg','New Data Added');
        
    }

    public function postadmin(Request $request ,$id){
        $koidfilter = KoiDFilter::findOrFail($id);

        $koidfilter->nama = request('nama');
        $koidfilter->price = request('price');
        $koidfilter->size = request('size');
        $koidfilter->desc = request('desc');
        if($request->hasfile('gambar')){
            $destination = 'img/products/koidfilter'.$koidfilter->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/products/koidfilter/',$filename);
            $koidfilter->gambar = $filename;
        }

        $koidfilter->update();

        return redirect('admin/details/koidfilter/'.$id)->with('mssg','Data Updated');
    }

    public function destroy($id){
        $koidfilter = KoiDFilter::findorFail($id);

        $koidfilter->delete();
        
        return redirect('/admin/tables/koidfilter')->with('mssg','Data Deleted');
    }
}
