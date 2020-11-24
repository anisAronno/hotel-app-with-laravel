<?php

namespace App\Http\Controllers\client;
use Illuminate\Http\Request;
use App\bookingModel;
use App\ExtraServicesModel;
use App\FacilitiesModel;
use App\HomeAboutSecTionModel;
use App\homeExclusiveFeaturesModel;
use App\homeSpecialFeaturesModel;
use App\SliderModel;
use App\VisitorModel;
use App\OthersModel;
use App\SocialModel;

use App\Http\Controllers\Controller;
use App\NewslatterModel;
use App\RoomModel;
use App\TestimonialModel;

class HomeController extends Controller
{
    public function HomeIndex()
    {

        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address' => $UserIP, 'visit_time' => $timeDate]);

        $sliders = json_decode(SliderModel::all());
        $othersData = json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData = json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $aboutESPageData= json_decode(ExtraServicesModel::orderBy('id', 'desc')->limit(4)->get());
        $HomeAboutSectionData= json_decode(HomeAboutSecTionModel::orderBy('id', 'desc')->get()->first());
        $HomeSFSectionData= json_decode(homeSpecialFeaturesModel::orderBy('id', 'desc')->limit(3)->get());
        $homeEXPPageData= json_decode(homeExclusiveFeaturesModel::orderBy('id', 'asc')->limit(4)->get());
        $HomeTestimonialData= json_decode(TestimonialModel::orderBy('id', 'desc')->limit(3)->get());
        $facilities= json_decode(FacilitiesModel::all());
        $rooms= json_decode(RoomModel::all());
        
        return View('client.index')
        ->with('othersData' ,$othersData)
        ->with('sliders' ,$sliders)
        ->with('socialData' ,$socialData)
        ->with('aboutESPageDatas',$aboutESPageData)
        ->with('HomeAboutSectionData',$HomeAboutSectionData)
        ->with('HomeSFSectionDatas',$HomeSFSectionData)
        ->with('homeEXPPageData',$homeEXPPageData)
        ->with('HomeTestimonialDatas',$HomeTestimonialData)
        ->with('facilities', $facilities)
        ->with('rooms', $rooms);
    }

    function bookingSend(Request $request){
        $arrival_date=$request->input('arrival_date');
        $departure_date=$request->input('departure_date');
        $customer_mobile=$request->input('customer_mobile');
        $adult_person=$request->input('adult_person');
        $children_person=$request->input('children_person');

        $result=bookingModel::insert([
            'arrival_date'=>$arrival_date,
            'departure_date'=>$departure_date,
            'customer_mobile'=>$customer_mobile,
            'adult_person'=>$adult_person,
            'children_person'=>$children_person
            ]);

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function newsLatterSend(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');

        $result=NewslatterModel::insert([
            'name'=>$name,
            'email'=>$email,

            ]);

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }












}
