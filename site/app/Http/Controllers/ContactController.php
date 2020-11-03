<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\contactModel;
use App\OthersModel;
use App\SocialModel;


class ContactController extends Controller
{
    public function contactIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('Contact',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
    
    function contactSend(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $PhonNumber=$request->input('PhonNumber');
        $YourSubject=$request->input('YourSubject');
        $massage=$request->input('massage');

        $result=contactModel::insert([
            'name'=>$name,
            'email'=>$email,
            'PhonNumber'=>$PhonNumber,
            'YourSubject'=>$YourSubject,
            'massage'=>$massage
            ]);

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

}
