<?php

namespace App\Http\Controllers;

use App\Work;
use App\Work_cat;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
   public function allpages(Request $request)
   {

     
      if($request->page_id==1)
      {
         return view('frontend.pages.ajax.about');
      }

      if($request->page_id==2)
      {
         return view('frontend.pages.ajax.resume');
      }

      if($request->page_id==3)
      {
         $work_cats = Work_cat::all();
         $works = Work::all();
         return view('frontend.pages.ajax.works', compact('works', 'work_cats'));
      }

      if($request->page_id==4)
      {
         return view('frontend.pages.ajax.blog');
      }

      if($request->page_id==5)
      {
         return view('frontend.pages.ajax.contact');
      }


   }

 

   public function showwork(Request $request)
   {
      
      if($request->show_id >= 0)
      {
         //Content Of $request->show_id

         $id = $request->show_id;
         $work = Work::find($id);
         return view('frontend.pages.ajax.show.work', compact('work'));

      }
      
   }


   public function showblog(Request $request)
   {
      
      if($request->show_id >= 0)
      {
         //Content Of $request->show_id

         $id = $request->show_id;

         return view('frontend.pages.ajax.show.blog', compact('id'));

      }
      
   }
}
