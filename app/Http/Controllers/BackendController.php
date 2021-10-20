<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use DB;

class BackendController extends Controller
{

    public function form(){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();

        //dd($kabupaten);
        return view('form', compact('provinsi', 'kabupaten', 'kecamatan'));        
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

    //view kabupaten
    public function viewkabupaten(Request $request, $id){
        $kabupaten= Kabupaten::where('id', $id)->first();
        //$prov = Provinsi::where('id', $id)->first();

        return view('viewkabupaten', compact('kabupaten'));
    }

    //delete kabupaten
    public function deletekabupaten($id){
        $kabupaten = Kabupaten::where('id', $id)->first();
        $kabupaten->delete();

        return redirect('/');
    }

    //edit provinsi page
    public function editviewprovinsi($id){
        
        $provinsi = Provinsi::find($id);
       

        return view('editformprovinsi', compact('provinsi'));
    }

    //submit edit provinsi
    public function submiteditprovinsi(Request $request, $id){
        $provinsi= Provinsi::where('id', $id)->first();

        $provinsi->update([
            'nama' => $request->nama
        ]);

        return redirect('/');
    }

    //view provinsi
    public function viewprovinsi(Request $request, $id){
        $provinsi = Provinsi::where('id', $id)->first();

        return view('viewprovinsi', compact('provinsi'));
    }

    //delete provinsi
    public function deleteprovinsi($id){
        $provinsi = Provinsi::where('id', $id)->first();

        $provinsi->delete();

        return redirect('/');
    }

    //page provinsi
    public function createviewkecamatan(){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();

        return view('createformkecamatan', compact('provinsi', 'kabupaten'));        
    }

    //create kecamatan
    public function submitformkecamatan(Request $request){
        $form = Kecamatan::create([
            'nama' => $request->nama,
            'id_provinsi' => $request->id_provinsi,
            'id_kabupaten' => $request->id_kabupaten
        ]);

        return redirect('/');
    }

    //view kecamatan
    public function viewkecamatan(Request $request, $id){
        $kecamatan = Kecamatan::where('id', $id)->first();
    
        //dd($kecamatan);
        return view('viewkecamatan', compact('kecamatan'));
    }

    //edit page kecamatan
    public function editviewkecamatan($id){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::find($id);

        return view('editformkecamatan', compact('kabupaten', 'provinsi', 'kecamatan'));
    }

    //submit edit kecamatan
    public function submiteditkecamatan(Request $request, $id){
        $kecamatan= Kecamatan::where('id', $id)->first();

        $kecamatan->update([
            'nama' => $request->nama,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten
        ]);

        return redirect('/');
    }

    //delete kabupaten
    public function deletekecamatan($id){
        $kecamatan = Kecamatan::where('id', $id)->first();
        $kecamatan->delete();
    
        return redirect('/');
    }

}
