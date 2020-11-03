<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\bookingModel;
use App\NewslatterModel;
use App\SliderModel;
use App\VisitorModel;
use App\OthersModel;
use App\SocialModel;


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
        return View('index', [
            
            'othersData' => $othersData,
            'sliders' => $sliders,
            'socialData' => $socialData
        ]);
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
