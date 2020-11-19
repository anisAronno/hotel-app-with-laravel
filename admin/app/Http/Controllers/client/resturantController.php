<?php

namespace App\Http\Controllers\client;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TestimonialModel;

class resturantController extends Controller
{
    public function resturantIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $HomeTestimonialData= json_decode(TestimonialModel::orderBy('id', 'desc')->limit(3)->get());
        return view('client.resturant',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'HomeTestimonialDatas'=>$HomeTestimonialData
        ]);
    }
}
