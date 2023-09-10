<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\createpost;
use App\Models\poststable;
use App\Models\categories;
use App\Models\contact;
use App\Models\infos;
use App\Models\photos;




use DB;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = createpost::all();
        return view("back.postsindex", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['categories'] = categories::all();
        return view("back.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createPost = new createpost;
        $createPhoto = new photos;
        $createPost->title = $request->title;
        $createPost->category = $request->category;
        $newImageName = time() . '-' . $request->coverphoto->getFileName() . '.' . $request->coverphoto->extension();
        $request->coverphoto->move(public_path('images'), $newImageName);
        $createPost->photo = $newImageName;
        $createPost->article = $request->article;
        $createPost->orderNumber = $request->orderNumber;
        $createPost->save();
        
        foreach($request->file("photos") as $photos){
        $createPhoto = new photos;
        $newImageName2 = time() . '-' . $photos->getFileName() . '.' . $photos->extension(); // fotografin ismini belirleme
        $photos->move(public_path('images'), $newImageName2); // fotografi public/images'e tasima
        $createPhoto->photo = $newImageName2; // Image Name
        $postID = createpost::where("photo", $newImageName)->first(); // fotografin postID'si
        $createPhoto->postID = $postID->id; 
        $createPhoto->save();
       }
        return redirect()->route("createarticle")->with("success", "Your post created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = categories::all();
        $data['articles'] = createpost::all();
        $data['article'] = createpost::where("id", $id)->firstOrFail();
        $data['photos'] = photos::where("postID",$id)->get();

        return view("back.update", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {


        $createPost = createpost::where("id", $id)->firstOrFail();
        $createPhoto = new photos;
        $createPost->title = $request->title;
        $createPost->category = $request->category;
        if($request->coverphoto != null){
        $newImageName = time() . '-' . $id . '.' . $request->coverphoto->extension();
        $request->coverphoto->move(public_path('images'), $newImageName);
        $createPost->photo = $newImageName;}
        foreach($request->file("photos") as $photos){
            $createPhoto = new photos;
            $newImageName2 = time() . '-' . $photos->getFileName() . '.' . $photos->extension(); // fotografin ismini belirleme
            $photos->move(public_path('images'), $newImageName2); // fotografi public/images'e tasima
            $createPhoto->photo = $newImageName2; // Image Name
            $createPhoto->postID = $id; 
            $createPhoto->save();
           }
        $createPost->article = $request->article;
        $createPost->orderNumber = $request->orderNumber;
        $createPost->save();
      ;

        return redirect()->route("showarticles")->with("success", "Your post updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function delete($id)
    {
        $createPost = createpost::where("id", $id)->firstOrFail();
        $createPost->delete();

        return redirect()->route("showarticles")->with("success", "Your post deleted successfully.");
    }
    public function Categories()
    {

        $data['categories'] = categories::all();

        return view("back.categories", $data);
    }
    public function storeCategories(Request $request)
    {

        $createCategories = new categories;
        $createCategories->name = $request->name;
        $createCategories->save();

        return redirect()->route("categories")->with("success", "Category created successfully.");
    }

    public function deleteCategories($category)
    {


        $post = poststable::where("category", $category)->get();
        foreach ($post as $posts) {

            BackController::delete($posts->id);
        }
        $deleteCategories = categories::where("name", $category);
        $deleteCategories->delete();

        return redirect()->route("categories")->with("success", "Category and posts deleted successfully.");
    }
    public function contacts()
    {
        $data['contacts'] = contact::all();

        return view("back.contacts", $data);
    }
    public function showInfos()
    {
        $data['infos'] = infos::first();
        return view("back.updateinfos", $data);
    }
    public function updateInfos(Request $request)
    {

        $data = infos::where("id", 1)->first();

        $data->sidebarName = $request->sidebarName;
        $data->sidebarAbstract = $request->sidebarAbstract;
        $data->sidebarTwitter = $request->sidebarTwitter;
        $data->sidebarFacebook = $request->sidebarFacebook;
        $data->sidebarLinkedin = $request->sidebarLinkedin;
        $data->sidebarInstagram = $request->sidebarInstagram;
        $data->sidebarPhoto = $request->sidebarPhoto;
        $data->aboutTitle = $request->aboutTitle;
        $data->aboutMe = $request->aboutMe;
        $data->contactAddress = $request->contactAddress;
        $data->contactNumber = $request->contactNumber;
        $data->contactEmail = $request->contactEmail;
        $data->save();

        return redirect()->route('infos')->with("success", "Your infos updated successfully.");
    }

    public function deletePhoto($id,$photoID){
        $deletephoto = photos::where("id",$photoID)->firstOrFail();
        $deletephoto->delete();

        return redirect()->route('editarticle',$id)->with("success", "Your photo deleted successfully.");

    }
}
