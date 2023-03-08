<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review_status;
use App\Models\Publis_status;
use App\Models\Article_file_upload;
use App\Models\vw_article_comments;
use App\Models\Article_comment;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BlogArticles\StoreArticleRequest;
use App\Http\Requests\BlogArticles\UpdateArticleRequest;
use Input;
use Alert;
use Carbon\Carbon;


class ArticleController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');

    }


  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
   public function create_new_article()
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

            if ($user->isAbleTo('can-create-edit-posts')){

            $article_archives = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->take(3)->get();

            return view('article/create_new_article', compact('article_archives'));
        }

        else{
           abort(403, 'User does not have any of the necessary access rights.');
        }
    }

  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function store_new_article(StoreArticleRequest $request)
    {
       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;
        $today = Carbon::now()->format('Y-m-d H:i:s');

    if ($user->isAbleTo('can-create-edit-posts')){


      //////////////////////////////GENERATING UNIQUE ID///////////////////////////////////////
          $existing_record=Article::withoutGlobalscopes()->get();

           $count_record = count($existing_record);
             // dd($count_record);
          if ($count_record==0) {
                         $new_record_no = 1;
                         $record_no_full = "BLOG000001";
             }

          else{
              $last_record_no = Article::orderBy('article_id', 'desc')->first()->record_no;

               if ($last_record_no<9)
               {
                   $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG00000".  $new_record_no;
               }

               elseif ($last_record_no >= 9 && $last_record_no <99)
               {
                   $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG0000".  $new_record_no;
               }

                elseif ($last_record_no >= 99 && $last_record_no <999)
               {
                   $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG000".  $new_record_no;
               }
                elseif ($last_record_no >= 999 && $last_record_no <9999)
               {
                   $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG00".  $new_record_no;
               }
                 elseif ($last_record_no >= 9999 && $last_record_no <99999)
               {
                   $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG0".  $new_record_no;
               }
               else{

                  $new_record_no = $last_record_no +1;
                   $record_no_full = "BLOG".  $new_record_no;
               }
             }
/////////////////////////////////////////////////////////////////////////

   $date_created = date('Y-m-d', strtotime($request->date_created));

         // dd($request->all());

        $detail=$request->article_body;
        $taglessdetail = strip_tags($detail);
        $dom = new \DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));  // important!
        $images = $dom->getelementsbytagname('img');
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/article_media/'. $image_name;
            file_put_contents($path, $data);
            $img->removeattribute('src');
            $img->setattribute('src', '/article_media/'. $image_name);
        }

        $detail = $dom->saveHTML( $dom->documentElement ); // important!
        $article = new Article;
        $article->article_body = $detail;
        $article->article_title = $request->article_title;
        $article->date_created = $date_created;
        $article->article_submited_by_user_id = $loggedin_user_id;
        $article->article_submited_at_date = $today;
        $article->article_body_searchable = $taglessdetail;
        $article->record_no = $new_record_no;
        $article->article_unique_id = $record_no_full;
	    $article->reference = $request->reference;
	    $article->meta_description = $request->meta_description;
	    $article->meta_keyword = $request->meta_keyword;
        $article->save();

        $insertedId = $article->article_id;

         $store_averta = Article::findorfail($insertedId);
          if ($request->hasFile('averta')) {
          $file = Input::file('averta');
          $extension = Input::file('averta')->getClientOriginalExtension();
          $filename = $insertedId . '_averta.' . $extension; // renameing image
          $destinationPath = 'article_images';//its refers project/public/article_images
          $store_averta->averta = $filename;
          $upload_success = $file->move($destinationPath, $filename);
        }
       else{
         $store_averta->averta = 'balance.png';
        }

         $store_averta->save();


      if($request->hasFile('article_files')) {

      $files = Input::file('article_files');  // getting all of the post data
      $file_count = count($files);  // Making counting of uploaded images
      $uploadcount = 0;  // start count how many uploaded


      foreach ($files as $file) {

          $destinationPath = 'article_file_uploads'; // upload folder in public directory
          $extension = $file->getClientOriginalExtension(); //get original name of file
          $original_filename = $file->getClientOriginalName(); //get the file name
          $new_filename = rand(1111111111,9999999999).time().'_'.$insertedId.'.'.$extension; // renameing the file
          $upload_success = $file->move($destinationPath, $new_filename); //move the file to a folder called uploads
          $uploadcount ++; //repeat for each file

          // save into database
          $entry = new Article_file_upload();
          $entry->mime = $file->getClientMimeType();
          $entry->original_filename = $original_filename;
          $entry->filename = $new_filename;
          $entry->article = $insertedId;
          $entry->save();
        }
    }
        return redirect('read_full_article_admin/'. $insertedId);
        }

else{
   abort(403, 'User does not have any of the necessary access rights.');
}

    }



  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit_article($article_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $get_article_submited_by_user_id =Article::where('end_record','=', 0)->where('article_id', $article_id)->first();
        $article_submited_by_user_id = $get_article_submited_by_user_id->article_submited_by_user_id;
        $publish_status = $get_article_submited_by_user_id->publish_status;

        if ($user->isAbleTo('can-create-edit-posts')){

        $article = Article::where('end_record','=', 0)->where('article_id', $article_id)->first();
        $article_files = Article_file_upload::where('end_record','=', 0)->where('article', $article_id)->get();
        $article_archives = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->take(3)->get();

        return view('article/edit_article', compact('article', 'article_archives', 'article_files'));

        }

        else{
        abort(403, 'User does not have any of the necessary access rights.');
        }

    }

  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
         public function store_edited_article(UpdateArticleRequest $request, $article_id)
    {

         $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $get_article_submited_by_user_id =Article::where('end_record','=', 0)->where('article_id', $article_id)->first();
        $article_submited_by_user_id = $get_article_submited_by_user_id->article_submited_by_user_id;
        $publish_status = $get_article_submited_by_user_id->publish_status;

        $today = Carbon::now()->format('Y-m-d H:i:s');

  if ($user->isAbleTo('can-create-edit-posts')){
        $date_created = date('Y-m-d', strtotime($request->date_created));


         $detail=$request->article_body;
         $taglessdetail = strip_tags($detail);
         // dd($taglessdetail);
        $dom = new \DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));  // important!
        $images = $dom->getelementsbytagname('img');
        foreach($images as $k => $img){
         $data = $img->getattribute('src');

           if (file_exists( public_path().$data )){
                //do nothing on change attribute if affected
                }

            else{
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/article_media/'. $image_name;
            file_put_contents($path, $data);
            $img->removeattribute('src');
            $img->setattribute('src', '/article_media/'. $image_name);

            }
        }
        $detail = $dom->saveHTML( $dom->documentElement ); // important!
        $article = Article::findOrFail($article_id);
        $article->article_body = $detail;
        $article->article_title = $request->article_title;
        $article->date_created = $date_created;
        $article->article_laste_edited_by_user_id = $loggedin_user_id;
        $article->article_laste_edited_at_date = $today;
        $article->article_body_searchable = $taglessdetail;
        $article->reference = $request->reference;
        $article->meta_description = $request->meta_description;
	    $article->meta_keyword = $request->meta_keyword;
        $article->save();


         $store_averta = Article::findorfail($article_id);
          if ($request->hasFile('averta')) {
          $file = Input::file('averta');
          $extension = Input::file('averta')->getClientOriginalExtension();
          $filename = $article_id . '_averta.' . $extension; // renameing image
          $destinationPath = 'article_images';//its refers project/public/article_images
          $store_averta->averta = $filename;
          $upload_success = $file->move($destinationPath, $filename);
        }

        $store_averta->save();


      if($request->hasFile('article_files')) {

      $files = Input::file('article_files');  // getting all of the post data
      $file_count = count($files);  // Making counting of uploaded images
      $uploadcount = 0;  // start count how many uploaded
      foreach ($files as $file) {
          $destinationPath = 'article_file_uploads'; // upload folder in public directory
          $extension = $file->getClientOriginalExtension(); //get original name of file
          $original_filename = $file->getClientOriginalName(); //get the file name
          $new_filename = rand(1111111111,9999999999).time().'_'.$article_id.'.'.$extension; // renameing the file
          $upload_success = $file->move($destinationPath, $new_filename); //move the file to a folder called uploads
          $uploadcount ++; //repeat for each file

          // save into database
          $entry = new Article_file_upload();
          $entry->mime = $file->getClientMimeType();
          $entry->original_filename = $original_filename;
          $entry->filename = $new_filename;
          $entry->article = $article_id;
          $entry->save();
        }
    }
        return redirect('read_full_article_admin/'. $article_id);
            }

        else{
        abort(403, 'User does not have any of the necessary access rights.');
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete_article($article_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $get_article_submited_by_user_id =Article::where('end_record','=', 0)->where('article_id', $article_id)->first();
        $article_submited_by_user_id = $get_article_submited_by_user_id->article_submited_by_user_id;

  if ($user->isAbleTo('can-delete-posts')){
        $article = Article::findOrFail($article_id);
        $article->end_record = 1;
        $article->save();

        return redirect('all_blog_posts_admin');

            }

        else{
       abort(403, 'User does not have any of the necessary access rights.');
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete_article_file($id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

    if ($user->isAbleTo('can-delete-posts')){
        $article = Article_file_upload::findOrFail($id);
        $article->end_record = 1;
        $article->save();

       return redirect()->back();
            }

        else{
      abort(403, 'User does not have any of the necessary access rights.');
        }
    }

//////////////////////////////////ADMIN ZONE/////////////////////////////////////////////////////////

     public function all_blog_posts_admin()
    {
// dd('hi');
       $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
        $show_searched_vrase= 0;

             if ($user->isAbleTo('can-view-posts')){

        $articles = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->paginate(21);
        $article_archives = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->take(3)->get();

        return view('article/all_blog_posts_admin', compact('articles', 'article_archives', 'show_searched_vrase'));

        }
              else{
      abort(403, 'User does not have any of the necessary access rights.');
        }
    }


         public function unpublished_posts()
    {
// dd('hi');
       $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
         $show_searched_vrase= 0;

         if ($user->isAbleTo('can-view-posts')){

        $articles = Article::where('end_record','=', 0)->where('publish_status','!=', 2)->orderBy('article_id', 'desc')->paginate(5);

        $article_archives = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->take(3)->get();

        return view('article/all_blog_posts_admin', compact('articles', 'article_archives', 'show_searched_vrase'));

        }
              else{
      abort(403, 'User does not have any of the necessary access rights.');
        }

    }


    public function read_full_article_admin($article_id)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;
         $show_searched_vrase= 0;

         if ($user->isAbleTo('can-view-posts')){
         $article = Article::where('end_record','=', 0)->where('article_id', $article_id)->first();
         $article_files = Article_file_upload::where('end_record','=', 0)->where('article', $article_id)->get();
         $article_archives = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->take(3)->get();

         $review_statuss = Review_status::pluck('review_status_name','review_status_id');
         $publis_statuss = Publis_status::pluck('publish_status_name','publish_status_id');

         return view('article/read_full_article_admin', compact('article', 'article_archives', 'review_statuss', 'publis_statuss', 'article_files'));

           }
              else{
      abort(403, 'User does not have any of the necessary access rights.');
        }
}

  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function search_articles_admin(Request $request)
    {
        $user = \Auth::user(); //note the user that logs in
        $loggedin_user_id = Auth::user()->id;

         $search= trim($request->search); //get the searched content

         $page_no = 21; //set the number of items per gage
         $show_searched_vrase= 1;

 if ($user->isAbleTo('can-view-posts')){
      if($request->has('search')){
            $searching = $request->search;
               if($searching == null || $searching ==""){
                  $articles = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->paginate($page_no);
                  $articles->appends($request->only('search'));
                    }
                else{
                  $articles = Article::where('end_record','=', 0)
                  ->search($search)
                 ->paginate($page_no);
                  $articles->appends($request->only('search'));
                }
        }else{
            $searching = "";
               $articles = Article::where('end_record','=', 0)->orderBy('article_id', 'desc')->paginate($page_no);
                $articles->appends($request->only('search'));
        }

        return view('article/all_blog_posts_admin', compact('articles', 'searching', 'show_searched_vrase'));
    }
              else{
      abort(403, 'User does not have any of the necessary access rights.');
        }

}

////////////////////////////////////END ADMIN ZONE/////////////////////////////////////////////




      public function publish_post(Request $request, $article_id)
    {

       $user = \Auth::user(); //note the user that logs in
       $loggedin_user_id = Auth::user()->id;

    $review_status = $request->review_status;
    $publish_status = $request->publish_status;

         if ($user->isAbleTo('can-publish-posts')){

            $article = Article::findorfail($article_id);
            $input = $request->all();
            $article->update($input);

            if($review_status == 2){
            $article = Article::findorfail($article_id);
            $article->request_for_review = 1;
            $article->save();
            }

          Alert::success('Record Updated Successfully')->autoclose(3000);
          return redirect('read_full_article_admin/'.$article_id);
          }

          else{
            abort(403, 'User does not have any of the necessary access rights.');
          }
}

}
