<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use DB;
class CategorieController extends Controller
{

    private static $count;

    public function __construct(){

        
    }

    public function liste(){
        $categories = DB::table('categories')->get();

        return view('categorie.liste')->with('categories', $categories);
    }

    public function getCategorie($categorieID){
        $categorie = DB::table('categories')->where('id', $categorieID)->first();

        if(!$categorie){
            return back();
        }
       
        return view('categorie.single')->with('categorie', $categorie);
    }

    public function getEdit($categorieID){

        $categorie = DB::table('categories')->where('id', $categorieID)->first();

        if(!$categorie){
            return back();
        }
       
        return view('categorie.edit')->with('categorie', $categorie);
    }

    public function getAdd(){

        return view('categorie.add');
    }


    public function store(Request $request){

        $rules = [
            'titre'=>'required',
            'description'=>'required'
        ];

        $request->validate($rules);

        // $validator = Validator::make($request->all(), $rules);
        // if($validator->fails()){
        //     return back()->withInput()->withErrors($validator->messages());
        // }else{
        //     $titre       = $request->titre;
        //     $description = $request->description;
        // }

        $titre       = $request->titre;
        $description = $request->description;

        DB::table('categories')->insert([
            'titre'=>$titre,
            'description'=>$description
        ]);

        return back()->with('succes', 'Enregistré');
    }

    public function postEdit(Request $request, $categorieID){

        $rules = [
            'titre'=>'required',
            'description'=>'required'
        ];

        $request->validate($rules);

        // $validator = Validator::make($request->all(), $rules);
        // if($validator->fails()){
        //     return back()->withInput()->withErrors($validator->messages());
        // }else{
        //     $titre       = $request->titre;
        //     $description = $request->description;
        // }

        $titre       = $request->titre;
        $description = $request->description;

        DB::table('categories')->where('id', $categorieID)->update([
            'titre'=>$titre,
            'description'=>$description
        ]);

        return back()->with('succes', 'Modifiée');
    }

    public function getDelete($categorieID){

        DB::table('categories')->where('id', $categorieID)->delete();
        return back()->with('succes', 'Supprimé');
    }
}
