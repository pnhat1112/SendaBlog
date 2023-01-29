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

class indexController extends Controller
{
    //
    public function index(){
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->get();
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->get();
        $takeCarePosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0'],['category', '=', 'chăm sóc']])->orderby('viewCount', 'desc')->get();
         return view('index', compact('lastPosts', 'hotPosts', 'takeCarePosts'));
    }
}
