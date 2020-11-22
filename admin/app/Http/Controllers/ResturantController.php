<?php

namespace App\Http\Controllers;

use App\ResturantImageModel;
use App\ResturantMenuModel;
use App\ResturantModel;
use Illuminate\Http\Request;

class ResturantController extends Controller
{
   public function ResturantIndex(){
    $results = json_decode(ResturantModel::orderBy('id', 'desc')->get()->first());
   
    return view('admin.Resturant', [
        'results'=>$results
    ]);
    }

    public function addTitle(Request $request)
    {
        $title = $request->input("title");

        $valuecheck = (ResturantModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = ResturantModel::where('id', '=',  $valuecheck['0']->id)->update(['title' => $title]);
        }
        else{
            $result = ResturantModel::insert(['title' => $title]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }



    public function addDescription(Request $request)
    {
        $description = $request->input("description");



        $valuecheck = (ResturantModel::orderBy('id', 'desc')->get());

        try {
            
        
        if( count($valuecheck)>0){
            $result = ResturantModel::where('id', '=',  $valuecheck['0']->id)->first();
            $result->description = $description;
            $result->save();  
            
        }
        else{
            $result =new  ResturantModel();
            $result->description = $description;
            $result->save();

        }
    } catch (\Throwable $th) {
       return response()->json(array('error'=>$th));
    }

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }






    public function addResturantVideo(Request $request)
    {
        $video = $request->input("video");
        $valuecheck = (ResturantModel::orderBy('id', 'desc')->get());

        try {  
        
        if( count($valuecheck)>0){
            $result = ResturantModel::where('id', '=',  $valuecheck['0']->id)->first();
            $result->video = $video;
            $result->save();  
            
        }
        else{
            $result =new  ResturantModel();
            $result->video = $video;
            $result->save();

        }
    } catch (\Throwable $th) {
       return response()->json(array('error'=>$th));
    }

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


    // --------------
    // Resturant Image
    //-----------------


    public function getResturantImageData()
    {
        $results = json_decode(ResturantImageModel::orderBy('id', 'desc')->get());
        return $results;
        dd($results);
    }


    function ResturantAboutImageDelete(Request $req)
    {
        $id = $req->input('id');
        $result = ResturantImageModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function ResturantAboutImageAdd(Request $req)
    {
       
     
        $fileName=$req->file('photo')->getClientOriginalName();
        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);
        $imageRealPath=asset('images')."/".$fileName;
      

            try {
                $result = ResturantImageModel::insert([
                    
                    'image' => $imageRealPath,
                    
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




    //-----------------
    //Get Resturant Data
    //------------------
    public function getResturantMenuData()
 {
     $menu_results = json_decode(ResturantMenuModel::orderBy('id', 'desc')->get());

     return $menu_results;
 }


 function ResturantMenuAdd(Request $request)
 {

     $ResturantMenu_title = $request->input("ResturantMenu_title");
     $ResturantMenu_description = $request->input("ResturantMenu_description");
     $ResturantMenu_categories = $request->input("ResturantMenu_categories");

    try {
        $result = ResturantMenuModel::insert([
            'title' => $ResturantMenu_title,
            'description' => $ResturantMenu_description,
            'category' => $ResturantMenu_categories
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


 function ResturantmenuDelete(Request $req)
 {
     $id = $req->input('id');
     $result = ResturantMenuModel::where('id', '=', $id)->delete();
     if ($result == true) {
         return 1;
     } else {
         return 0;
     }
 }



 function getResturantmenuEditData(Request $req)
 {
     $id = $req->input('id');
       
     try {
         $result = json_encode(ResturantMenuModel::where('id', '=', $id)->get());
         return $result;
        
     } catch (\Throwable $th) {
        return response()->json(array('error'=>$th));
     }
   
 }



 function ResturantMenuUpdate(Request $request)
    {

        $id = $request->input("id");
        $ResturantMenu_title = $request->input("ResturantMenu_title");
        $ResturantMenu_description = $request->input("ResturantMenu_description");
        $ResturantMenu_category = $request->input("ResturantMenu_category");
        
            $result = ResturantMenuModel::where('id', '=', $id)->update(['title' => $ResturantMenu_title, 'description' => $ResturantMenu_description,'category' => $ResturantMenu_category ]);
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        
    }











}
