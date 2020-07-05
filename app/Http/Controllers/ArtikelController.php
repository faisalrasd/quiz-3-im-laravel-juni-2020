<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    
    public function create (){
        return view ('artikel.form');
    }

    public function store (Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $artikel = artikelModel::save($data);
        //dd($items);
        return redirect ('artikel');
           }
           public function index (){
            $artikel = artikelModel::get_all();
            //dd($items);
            return view ('artikel.index', compact('artikel'));
        }
   
    
        public function show ($id){
            $artikel = artikelModel:: find_by_id($id);
            return view('artikel.show', compact('artikel'));
        }

        public function edit ($id){
            $artikel = artikelModel:: find_by_id($id);
            return view('artikel.edit', compact('artikel'));
        }

        public function update ($id, Request $request){
            $artikel = artikelModel:: update($id, $request->all());
            return redirect('/artikel');
        }

        public function destroy ($id){
            $delete = artikelModel:: destroy($id);
            return redirect('/artikel');
        }
}