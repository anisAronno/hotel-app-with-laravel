<?php

namespace App\Http\Controllers\client;

use App\AboutModel;
use App\ExtraServicesModel;
use App\FacilitiesModel;
use App\Http\Controllers\Controller;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $aboutPageData= json_decode(AboutModel::orderBy('id', 'desc')->get()->first());
        $aboutESPageData= json_decode(ExtraServicesModel::orderBy('id', 'desc')->limit(4)->get());
        $facilities= json_decode(FacilitiesModel::all());
        return view('client.About',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'aboutPageData'=>$aboutPageData,
            'aboutESPageDatas'=>$aboutESPageData,
            'facilities'=> $facilities


        ]);
    }
}
