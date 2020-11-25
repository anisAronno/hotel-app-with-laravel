<?php

namespace App\Http\Controllers;

use App\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogIndex(){
        return view('admin.blogPage');
    }


    public function getBlogData()
    {
        $results = json_decode(BlogModel::orderBy('id', 'desc')->get());
        return $results;
    }



    function BlogDelete(Request $req)
    {
        $id = $req->input('id');
        $result = BlogModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function BlogAdd(Request $req)
    {

       
        $data = json_decode($_POST['data']);
       
        $title = $data['0']->title;
        $description = $data['0']->description;
        $categories = $data['0']->categories;
       
       $fileNames=$req->file('photo')->getClientOriginalExtension();
            $fileName=time().".".$fileNames;

        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);

        $imageRealPath=asset('images')."/".$fileName;
      

            try {
                $result = BlogModel::insert([
                    'title' => $title,
                    'description' => $description,
                    'image' => $imageRealPath,
                    'categories' => $categories,
                ]);
            } catch (\Throwable $th) {
              return response()->json(array('error'=>$th));
            }

       
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function  BlogEdit(Request $req)
    {
        $id = $req->input('id');
        $result = json_encode(BlogModel::where('id', '=', $id)->get());
        return $result;
    }





    function BlogUpdate(Request $req)
    {


        $data = json_decode($_POST['data']);
        
        $id = $data['0']->id;
       
        $title = $data['0']->title;
        $categories = $data['0']->categories;
        $description = $data['0']->description;
        if ($req->file('photo')) {
            
       $fileNames=$req->file('photo')->getClientOriginalExtension();
            $fileName=time().".".$fileNames;

        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);

        $imageRealPath=asset('images')."/".$fileName;
            $result = BlogModel::where('id', '=', $id)->update(['title' => $title, 'categories' => $categories, 'description' => $description, 'image' => $imageRealPath]);
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        } else {
            $result = BlogModel::where('id', '=', $id)->update(['title' => $title, 'categories' => $categories, 'description' => $description]);
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }






    }











}
