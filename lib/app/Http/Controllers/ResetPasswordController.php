<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\ResetsPasswords;
class ResetPasswordController extends Controller
{
    public function getPass(){
    	return view('fontend.resetpass');
    }
}
