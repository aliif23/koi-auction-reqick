<?php

namespace App\Http\Controllers;

use App\Models\KoiFilter;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KoiFilterController extends Controller
{
    public function index(){
        $koifilters = KoiFilter::all();

        return view('koi.products.koifilter',[
            "koifilters" => $koifilters
        ]);
    }

    public function indexadmin(){
        $koifilters = KoiFilter::all();

        return view('admin.tables.koifiltertables',[
            "koifilters" => $koifilters
        ]);
    }

    public function showadmin($id){
        $koifilter = KoiFilter::findOrFail($id);

        return view('admin.details.koifilter',[
            "koifilter" => $koifilter
        ]);
    }

    public function create(Request $request){
        $koifilter = new KoiFilter();

        $koifilter->nama = request('nama');
        $koifilter->price = request('price');
        $koifilter->size = request('size');
        $koifilter->desc = request('desc');
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('img/products/koifilter/',$filename);
        $koifilter->gambar = $filename;

        $koifilter->save();

        return redirect('/admin/tables/koifilter')->with('mssg','New Data Added');
        
    }

    public function postadmin(Request $request ,$id){
        $koifilter = KoiFilter::findOrFail($id);

        $koifilter->nama = request('nama');
        $koifilter->price = request('price');
        $koifilter->size = request('size');
        $koifilter->desc = request('desc');
        if($request->hasfile('gambar')){
            $destination = 'img/products/koifilter'.$koifilter->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/products/koifilter/',$filename);
            $koifilter->gambar = $filename;
        }

        $koifilter->update();

        return redirect('admin/details/koifilter/'.$id)->with('mssg','Data Updated');
    }

    public function destroy($id){
        $koifilter = KoiFilter::findorFail($id);

        $koifilter->delete();
        
        return redirect('/admin/tables/koifilter')->with('mssg','Data Deleted');
    }
}
