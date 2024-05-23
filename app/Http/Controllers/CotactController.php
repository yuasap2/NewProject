<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactSendMail;

class CotactController extends Controller
{
    public function index()
    {
        return view('top');
    }


    public function confirm(Request $request)
        {
        $inputs = $request->all();
            if(!$inputs){
                return redirect()->route('index');
            }
            $request->validate([
            'name' => 'required',
                'cname' => 'required',
                'tel' => ['required', 'numeric', 'digits_between:8,11'],
                'email' => ['required','email','confirmed'],
                'messgae' => 'max:4000'
            ]);
            return view('confirm',[
                'inputs' => $inputs,
            ]);
        }
    
    public function send(Request $request)
        {
            $inputs = $request->all();
            
            if(!$inputs){
                return redirect()->route('index');
            }
            
            \Mail::to($input['email'])->send(new CotactSendMail($inputs));

        $request->saession()->regenerateToken();//2回メール送信を防ぐため

        return view('thanks');

        }

}   