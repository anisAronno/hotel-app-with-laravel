<?php

namespace App\Http\Controllers;

use App\FacilitesImageModel;
use App\FacilitiesModel;
use Illuminate\Http\Request;

class AdminFacilitiesController extends Controller
{
    public function FacilitiesIndex(){
        return view('admin.Facilities');
        }

         public function getFacilitiesData()
        {
            $results = json_decode(FacilitiesModel::orderBy('id', 'desc')->get());
            
            return $results;

        }
    

        function FacilitiesAdd(Request $req)
        {
    
            $FacilitiesPage = $req->input("FacilitiesPage");
            $name = $req->input("name");
            $description = $req->input("description");
            $FacilitiesSubTitle = $req->input("FacilitiesSubTitle");
                try {
                    $result = FacilitiesModel::insert([

                        'page_title' => $FacilitiesPage,
                        'title' => $name,
                        'description' => $description,
                        'sub_title' => $FacilitiesSubTitle,
                        
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
    

        function FacilitiesDelete(Request $req)
        {
            $id = $req->input('id');
            $result = FacilitiesModel::where('id', '=', $id)->delete();
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }
       


        function FacilitiesEdit(Request $req)
        {
            $id = $req->input('id');
            $result = json_encode(FacilitiesModel::where('id', '=', $id)->get());
            return $result;
        }


        function FacilitiesUpdate(Request $req)
        {
    
            $id = $req->input("id");
            $FacilitiesPageIdUpdate = $req->input("FacilitiesPageIdUpdate");
            $name = $req->input("name");
            $description = $req->input("description");
            $SubTitle = $req->input("SubTitle");

                $result = FacilitiesModel::where('id', '=', $id)->update(['page_title' => $FacilitiesPageIdUpdate,'title' => $name, 'description' => $description, 'sub_title' => $SubTitle]);
                if ($result == true) {
                    return 1;
                } else {
                    return 0;
                }

    
    
        }





 // --------------
    // Facilities Image
    //-----------------


    public function getFacilitiesImageData()
    {
        $results = json_decode(FacilitesImageModel::orderBy('id', 'desc')->get());
        return $results;
        dd($results);
    }


    function FacilitiesImageDelete(Request $req)
    {
        $id = $req->input('id');
        $result = FacilitesImageModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function FacilitiesImageAdd(Request $req)
    {
       
        $data = json_decode($_POST['data']);
        $pageName = $data['0']->pageName;
       $fileNames=$req->file('photo')->getClientOriginalExtension();
            $fileName=time().".".$fileNames;
        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);
        $imageRealPath=asset('images')."/".$fileName;
      
       
            try {
                $result = FacilitesImageModel::insert([
                    
                    'image' => $imageRealPath,
                    'page_name' => $pageName
                    
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













}
