<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Captcha;

class CaptchaController extends Controller
{
    //
    public function index() {
        // $mews = Captcha::src('inverse');, compact('mews')
        return view('captcha.index');
    }
    /*������֤��*/
    public function mews() {

        return Captcha::create('default');
    }

}
