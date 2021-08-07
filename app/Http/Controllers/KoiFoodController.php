<?php

namespace App\Http\Controllers;

use App\Models\KoiFood;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class KoiFoodController extends Controller
{
    public function index(){
        $koifoods = KoiFood::all();

        return view('koi.products.koifood',[
            "koifoods" => $koifoods
        ]);
    }

    public function indexadmin(){
        $koifoods = KoiFood::all();

        return view('admin.tables.koifoodtables',[
            "koifoods" => $koifoods
        ]);
    }

    public function showadmin($id){
        $koifood = KoiFood::findOrFail($id);

        return view('admin.details.koifood',[
            "koifood" => $koifood
        ]);
    }

    public function create(Request $request){
        $koifood = new KoiFood();

        $koifood->nama = request('nama');
        $koifood->price = request('price');
        $koifood->size = request('size');
        $koifood->desc = request('desc');
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('img/products/koifood/',$filename);
        $koifood->gambar = $filename;

        $koifood->save();

        return redirect('/admin/tables/koifood')->with('mssg','New Data Added');
        
    }

    public function postadmin(Request $request ,$id){
        $koifood = KoiFood::findOrFail($id);

        $koifood->nama = request('nama');
        $koifood->price = request('price');
        $koifood->size = request('size');
        $koifood->desc = request('desc');
        if($request->hasfile('gambar')){
            $destination = 'img/products/koifood'.$koifood->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/products/koifood/',$filename);
            $koifood->gambar = $filename;
        }
        


        $koifood->update();

        return redirect('admin/details/koifood/'.$id)->with('mssg','Data Updated');
    }

    public function destroy($id){
        $koifood = KoiFood::findorFail($id);

        $koifood->delete();
        
        return redirect('/admin/tables/koifood')->with('mssg','Data Deleted');
    }
}
