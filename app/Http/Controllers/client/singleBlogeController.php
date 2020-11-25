<?php

namespace App\Http\Controllers\client;

use App\BlogModel;
use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomModel;

class singleBlogeController extends Controller
{
    public function singleBlogIndex($blogId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        $rooms=RoomModel::all();
        $Blogdetails=BlogModel::where('id',$blogId)->first();
        $BlogData= BlogModel::paginate(5);
        
        return view('client.single-blog')
            ->with('othersData',$othersData)
            ->with('socialData',$socialData)
            ->with('rooms',$rooms)
            ->with('facilities', $facilities)
            ->with('Blogdetails',$Blogdetails)
            ->with('BlogDatas',$BlogData);
            
    }
}
