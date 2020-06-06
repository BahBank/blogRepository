<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use DB;
 
class ArticleController extends Controller
{
   public function __construct(){

   }
      public function getAddArticle()
      {
          return view('article.add');
      }

      public function storeArticle(Request $request){

        $rules = [
            'title'=>'required',
            'description'=>'required'
        ];

        $request->validate($rules);

        $title       = $request->title;
        $description = $request->description;

        DB::table('article')->insert([
            'title'=>$title,
            'description'=>$description
        ]);

        return back()->with('succes', 'Enregistré');
    }

    public function listeArticle(){
        $articles = DB::table('article')->get();

        return view('article.liste')->with('articles', $articles);
    }

    public function getEditArticle($articleID){

        $article = DB::table('article')->where('id', $articleID)->first();
          
        if(!$article){
            return back();
        }
       
        return view('article.edit')->with('article', $article);
    }

    public function getArticle($articleID){
        $article = DB::table('article')->where('id', $articleID)->first();
        if(!$article){
            return back();
        }

        return view('article.single')->with('article',$article);

    }


    public function postEditArticle(Request $request, $articleID){

        $rules = [
            'title'=>'required',
            'description'=>'required'
        ];

        $request->validate($rules);

        $title       = $request->title;
        $description = $request->description;

        DB::table('article')->where('id', $articleID)->update([
            'title'=>$title,
            'description'=>$description
        ]);

        return back()->with('succes', 'Modifiée');
    }

    
    public function getDeleteArticle($articleID){

        DB::table('article')->where('id', $articleID)->delete();
        return back()->with('succes', 'Supprimé');
    }
}
