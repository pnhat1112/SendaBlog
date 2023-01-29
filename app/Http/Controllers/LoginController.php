<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Post;
use DB;


class LoginController extends Controller
{
    //
    public function create(Request $req){
        $userName = $req->userName;
        $password = $req->password;
        $leveluser = '0';
        User::create([
            'firstName' => $req['firstName'],
            'lastName' => $req['lastName'],
            'userName' => $req['userName'],
            'email' => $req['email'],
            'level'=>0,
            'password' => bcrypt($req['password']),
        ]);
        Auth::attempt(['userName' => $userName, 'password' => $password, 'level' => $leveluser]);
        $req->session()->regenerate();
        return redirect('index');
    }

    public function login(Request $req){
        if ($req->isMethod('POST')) {

            $userName = $req->userName;
            $password = $req->password;
            $leveladmin = '1';
            $leveluser = '0';
            if ( Auth::attempt(['userName' => $userName, 'password' => $password, 'level' => $leveladmin]) ) {
                $req->session()->regenerate();
                return redirect('admin/index');
            } 
            if ( Auth::attempt(['userName' => $userName, 'password' => $password, 'level' => $leveluser]) ) {
                # code...
                $req->session()->regenerate();
                return Redirect('/index');
                // return '<script type="text/javascript">alert("");</script>';
            }
            else {
                return redirect('index')->with('errorLogin', 'Tài khoản của bạn không đúng!');
            }
        } 
        return redirect('index')->with('errorLogin', 'Có lỗi xuất hiện');;
    }

    public function logout(){
        # code...
        if (Auth::logout()) {
            # code...
            return redirect('index');
        }
        return redirect('index');
    }

    
}
