<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\poststable;
use App\Models\comments;
use App\Models\infos;
use App\Models\photos;
use App\Models\createpost;
use App\Models\categories;





class MainController extends Controller
{
    public function homepage()
    {
        $data['veri'] = createpost::orderBy('orderNumber')->get();
        $data['carouselveri'] = createpost::inRandomOrder()->get();
        $data['kategori'] = categories::all();
        $data['infos'] = infos::all()->first();
        return view('front.index', $data);
    }
    public function aboutMe()
    {
        $data['kategori'] =categories::all();
        $data['infos'] = infos::all()->first();

        return view('front.about', $data);
    }
    public function contact()
    {
        $data['kategori'] =categories::all();
        $data['infos'] = infos::all()->first();


        return view('front.contact', $data);
    }
    

    public function contactPost(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success',"Your message has been sent seccessfully.");
    }


    public function single($id)
    {
        $data['veri'] = poststable::where("id",$id)->first();
        $data['kategori'] =categories::all();
        $data["comments"] = comments::where("postID",$id)->get();
        $data['infos'] = infos::all()->first();
        $data['photos'] = photos::where('postID',$id)->get();

        return view('front.single', $data);
    }
    public function categorypost($category)
    {
        $data['kategori'] =categories::all();
        $data['veri'] = createpost::where("category",$category)->inrandomOrder()->get();
        $data['category'] = $category;
        $data['infos'] = infos::all()->first();

        return view('front.categorypost', $data);
    }
 
    public function storecomment(Request $request,$id){
        $comment = new comments;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->message = $request->message;
        $comment->postID = $id;
        $comment->save();

        return redirect()->route("single",$id);

    }


    // auth
    public function login()
    {

        return view('back.login');
    }
    public function admin()
    {
        $data['veri'] = createpost::all();
        $data['kategori'] =categories::all();
        $data['contacts'] = contact::all();


        return view('back.admin',$data);
    }
    public function loginPost(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            return redirect()->route("admin");
        } else {
            return redirect()->route("login")->withErrors('Username or Password is valid.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
