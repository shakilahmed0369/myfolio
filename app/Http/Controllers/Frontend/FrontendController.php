<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\BlogPost;
use App\Client;
use App\Contact;
use App\Funfact;
use App\Http\Controllers\Controller;
use App\Knowledge;
use App\Service;
use App\Social_link;
use App\Technology;
use App\Testimonial;
use App\User;
use App\Work;
use App\Work_cat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public static function profile(){
        $profile = User::first();
        $links = Social_link::all();
        return ['profile' => $profile, 'links' => $links];
    }

    public function about()
    {
        $about = About::first();
        $services = Service::all();
        $funFacts = Funfact::all();
        $clients = Client::all();
        $testimonials = Testimonial::all();
        return view('frontend.pages.about', compact('about', 'services', 'funFacts', 'clients', 'testimonials'));
    }

    public function resume()
    {
        $skills = Knowledge::orderBy('id', 'DESC')->get();
        $technologies = Technology::orderBy('id', 'DESC')->get();
        return view('frontend.pages.resume', compact('skills', 'technologies'));
    }

    public function works()
    {
        $work_cats = Work_cat::all();
        $works = Work::orderBy('id', 'DESC')->paginate(6);
        return view('frontend.pages.work', compact('work_cats', 'works'));
    }

    public function show_work($id)
    {
        $work = Work::find($id);
        return view('frontend.pages.show-work', compact('work'));
    }

    public function blog()
    {
        $blogs = BlogPost::orderBy('id', 'DESC')->paginate(6);
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function show_blog($id)
    {
        $showBlog = BlogPost::find($id);
        return view('frontend.pages.show-blog', compact('showBlog'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('frontend.pages.contact', compact('contact'));
    }

    public function sendMail(Request $request)
    {
        $details = [
            'title' => $request->email,
            'name' => $request->name,
            'body' => $request->message
        ];
        \Mail::to('sakilhossain01969@gmail.com')->send(new \App\Mail\Email($details));
        return redirect()->back()->with('send', 'Message Sended Successfully!');

    }


}
