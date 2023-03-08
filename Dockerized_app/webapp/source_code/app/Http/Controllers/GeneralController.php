<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Role_user;
use App\Models\Permission_role;
use App\Models\Article;
use App\Models\Article_file_upload;
use App\Models\Our_service;

class GeneralController extends Controller
{
    //


         public function welcome2()
    {


         $articles = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->orderBy('article_id', 'desc')->take(3)->get();

        return view('welcome2', compact('articles'));

    }


       public function read_full_post($article_id)
    {
         $article = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->where('article_id', $article_id)->first();
         $article_archives = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->orderBy('article_id', 'desc')->take(4)->get();
  $article_files = Article_file_upload::where('end_record','=', 0)->where('article', $article_id)->get();
         return view('article/read_full_post', compact('article', 'article_archives', 'article_files'));
    }


       public function blog()
    {
         $show_searched_vrase= 0;

         $articles = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->orderBy('article_id', 'desc')->paginate(21);

         return view('blog', compact('articles', 'show_searched_vrase'));
    }

      public function search_articles_public(Request $request)
    {

         $search= trim($request->search); //get the searched content
         $page_no = 5; //set the number of items per gage

         $show_searched_vrase= 1;

      if($request->has('search')){
            $searching = $request->search;
               if($searching == null || $searching ==""){
                  $articles = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->orderBy('article_id', 'desc')->paginate($page_no);
                  $articles->appends($request->only('search'));
                    }
                else{
                  $articles = Article::where('end_record','=', 0)->where('publish_status', '=', 2)
                  ->search($search)
                 ->paginate($page_no);
                  $articles->appends($request->only('search'));
                }
        }else{
            $searching = "";
               $articles = Article::where('end_record','=', 0)->where('publish_status', '=', 2)->orderBy('article_id', 'desc')->paginate($page_no);
                $articles->appends($request->only('search'));
        }

        return view('blog', compact('articles', 'searching', 'show_searched_vrase'));

}


}
