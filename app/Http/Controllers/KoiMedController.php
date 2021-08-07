<?php

namespace App\Http\Controllers;

use App\Models\KoiMed;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KoiMedController extends Controller
{
    public function index(){
        $koimeds = KoiMed::all();

        return view('koi.products.koimed',[
            "koimeds" => $koimeds
        ]);
    }

    public function indexadmin(){
        $koimeds = KoiMed::all();

        return view('admin.tables.koimedtables',[
            "koimeds" => $koimeds
        ]);
    }

    public function showadmin($id){
        $koimed = KoiMed::findOrFail($id);

        return view('admin.details.koimed',[
            "koimed" => $koimed
        ]);
    }

    public function create(Request $request){
        $koimed = new KoiMed();

        $koimed->nama = request('nama');
        $koimed->price = request('price');
        $koimed->size = request('size');
        $koimed->desc = request('desc');
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('img/products/koimed/',$filename);
        $koimed->gambar = $filename;

        $koimed->save();

        return redirect('/admin/tables/koimed')->with('mssg','New Data Added');
        
    }

    public function postadmin(Request $request ,$id){
        $koimed = KoiMed::findOrFail($id);

        $koimed->nama = request('nama');
        $koimed->price = request('price');
        $koimed->size = request('size');
        $koimed->desc = request('desc');
        if($request->hasfile('gambar')){
            $destination = 'img/products/koimed'.$koimed->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/products/koimed/',$filename);
            $koimed->gambar = $filename;
        }

        $koimed->update();

        return redirect('admin/details/koimed/'.$id)->with('mssg','Data Updated');
    }

    public function destroy($id){
        $koimed = KoiMed::findorFail($id);

        $koimed->delete();
        
        return redirect('/admin/tables/koimed')->with('mssg','Data Deleted');
    }
}
