<?php

namespace App\Http\Controllers;

use App\Models\Koi;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KoiController extends Controller
{
    public function index(){
        $kois = Koi::all();

        return view('koi.products.koiproduct',[
            "kois" => $kois
        ]);
    }

    public function indexadmin(){
        $kois = Koi::all();

        return view('admin.tables.koitables',[
            "kois" => $kois
        ]);
    }

    public function showadmin($id){
        $koi = Koi::findOrFail($id);

        return view('admin.details.koi',[
            "koi" => $koi
        ]);
    }

    public function create(Request $request){
        $koi = new Koi();

        $koi->nama = request('nama');
        $koi->price = request('price');
        $koi->size = request('size');
        $koi->desc = request('desc');
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('img/products/koi/',$filename);
        $koi->gambar = $filename;

        $koi->save();

        return redirect('/admin/tables/koi')->with('mssg','New Data Added');
        
    }

    public function postadmin(Request $request ,$id){
        $koi = Koi::findOrFail($id);

        $koi->nama = request('nama');
        $koi->price = request('price');
        $koi->size = request('size');
        $koi->desc = request('desc');
        if($request->hasfile('gambar')){
            $destination = 'img/products/koi'.$koi->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/products/koi/',$filename);
            $koi->gambar = $filename;
        }
        


        $koi->update();

        return redirect('admin/details/koi/'.$id)->with('mssg','Data Updated');
    }

    public function destroy($id){
        $koi = Koi::findorFail($id);

        $koi->delete();
        
        return redirect('/admin/tables/koi')->with('mssg','Data Deleted');
    }
}
