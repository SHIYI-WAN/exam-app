<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list()
    {
        return view('list');
    }
    public function upload(Request $request)
    {
         $this->region_validation($request);
         $title = $request->get('title');
         $category_id = $request->get('category_id');
         $author_id=$request->get('author_id');
         $year=$request->get('year');
         $description=$request->get('description');
             
         $insertBook = [
             'title' => $title,
             'category_id' => $category_id,
             'author_id'=>$author_id,
             'year'=>$year,
             'description'=>$description,

         ];
        
         DB::table('books')->insert( $insertBook);
         
         return redirect()->back();
 
         return view('list');
     }
 
     public function region_validation(){
         $rules = [ 
             'title' => 'required',
             'category_id' => 'required',
             'author_id'=>'required',
             'year'=>'required',
             'description'=>'required'
         ];
 
     }

}
