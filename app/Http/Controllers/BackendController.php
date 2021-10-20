<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use DB;

class BackendController extends Controller
{


    public function form(){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();
        
        $kf = Provinsi::get();
        $dd = DB::table('provinsi')->select('nama')->get();

        //dd($provinsi);
        return view('form', compact('provinsi', 'kabupaten', 'kf', 'dd'));        
    }

    //page provinsi
    public function createviewprovinsi(){

        return view('createformprovinsi');        
    }

    //page kabupaten
    public function createviewkabupaten(){
        $provinsi = Provinsi::all();

        return view('createformkabupaten', compact('provinsi'));        
    }

    public function submitformprovinsi(Request $request){
        $form = Provinsi::create([
            'nama' => $request->nama
        ]);

        return redirect('/');
    }

    public function submitformkabupaten(Request $request){
        $form = Kabupaten::create([
            'nama' => $request->nama,
            'id_provinsi' => $request->id_provinsi
        ]);

        return redirect('/');
    }

    public function editviewkabupaten($id){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::find($id);

        return view('editformkabupaten', compact('kabupaten', 'provinsi'));
    }

    public function submiteditkabupaten(Request $request, $id){
        $kabupaten= Kabupaten::where('id', $id)->first();

        $kabupaten->update([
            'nama' => $request->nama,
            'id_provinsi' => $request->id_provinsi
        ]);

        return redirect('/');
    }
    public function viewkabupaten(Request $request, $id){
        $kabupaten= Kabupaten::where('id', $id)->first();
        //$prov = Provinsi::where('id', $id)->first();

        return view('viewkabupaten', compact('kabupaten'));
    }
    public function deletekabupaten($id){
        $kabupaten = Kabupaten::where('id', $id)->first();
        $kabupaten->delete();

        return redirect('/');
    }

    public function editviewprovinsi($id){
        
        $provinsi = Provinsi::find($id);
       

        return view('editformprovinsi', compact('provinsi'));
    }

    public function submiteditprovinsi(Request $request, $id){
        $provinsi= Provinsi::where('id', $id)->first();

        $provinsi->update([
            'nama' => $request->nama
        ]);

        return redirect('/');
    }

    public function viewprovinsi(Request $request, $id){
        $provinsi = Provinsi::where('id', $id)->first();

        return view('viewprovinsi', compact('provinsi'));
    }

    public function deleteprovinsi($id){
        $provinsi = Provinsi::where('id', $id)->first();

        $provinsi->delete();

        return redirect('/');
    }
}
