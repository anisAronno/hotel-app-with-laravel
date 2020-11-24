<?php

namespace App\Http\Controllers;

use App\AboutModel;
use App\ExtraServicesModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
 
    public function AboutIndex(){

        $results = json_decode(AboutModel::orderBy('id', 'desc')->get()->first());
        return view('admin.AdminAbout', [
            'results'=>$results
        ]);
    }

    

    function imageAdd(Request $req)
    {

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());
        
        $fileNames=$req->file('photo')->getClientOriginalExtension();
        $fileName=time().".".$fileNames;

        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);

        $imageRealPath=asset('images')."/".$fileName;

        if( count($valuecheck)>0){
        $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['image' => $imageRealPath]);
        } else{
            $result = AboutModel::insert(['image' => $imageRealPath]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }

    public function addTitle(Request $request)
    {
        $title = $request->input("title");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['title' => $title]);
        }
        else{
            $result = AboutModel::insert(['title' => $title]);
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



        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());

        try {
            
        
        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->first();
            $result->description = $description;
            $result->save();  
            
        }
        else{
            $result =new  AboutModel();
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


    public function addFbLike(Request $request)
    {
        $facebook = $request->input("facebook");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['facebook' => $facebook]);
        }
        else{
            $result = AboutModel::insert(['facebook' => $facebook]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }



    public function addTwitter(Request $request)
    {
        $twitter = $request->input("twitter");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['twitter' => $twitter]);
        }
        else{
            $result = AboutModel::insert(['twitter' => $twitter]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


    public function addYoutube(Request $request)
    {
        $youtube = $request->input("youtube");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['youtube' => $youtube]);
        }
        else{
            $result = AboutModel::insert(['youtube' => $youtube]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


    public function addLinkedIn(Request $request)
    {
        $linkedin = $request->input("linkedin");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['linkedin' => $linkedin]);
        }
        else{
            $result = AboutModel::insert(['linkedin' => $linkedin]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }



    public function addBooking(Request $request)
    {
        $review = $request->input("review");

        $valuecheck = (AboutModel::orderBy('id', 'desc')->get());



        if( count($valuecheck)>0){
            $result = AboutModel::where('id', '=',  $valuecheck['0']->id)->update(['review' => $review]);
        }
        else{
            $result = AboutModel::insert(['review' => $review]);
        }
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    public function getExtraServicesData()
    {
        $result = json_decode(ExtraServicesModel::orderBy('id', 'desc')->get());
        return $result;
    }

    function aboutESAdd(Request $request)
    {

        $title = $request->input("title");
        $description = $request->input("description");

        $result = ExtraServicesModel::insert([
            'title' => $title,
            'description' => $description
        ]);
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }



    function AboutESDelete(Request $req)
    {
        $id = $req->input('id');
        $result = ExtraServicesModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function AboutDetailEdit(Request $req)
    {
        $id = $req->input('id');
        $result = json_encode(ExtraServicesModel::where('id', '=', $id)->get());
        // dd( $result);
        return $result;
    }



    function AboutESUpdate(Request $request)
    {

        $id = $request->input("id");
        $title = $request->input("title");
        $description = $request->input("description");
        
            $result = ExtraServicesModel::where('id', '=', $id)->update(['title' => $title, 'description' => $description]);
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        
    }

   
}
