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

class AdminController extends Controller
{
    //
    public function index(){

        return view('admin.layout');
    }

    public function allowBlogView() {
        $title = 'Duyệt bài viết';
        $posts = DB::table('posts')->where('allow', '1')->get();
        return view('admin.allow_blog', compact('posts'))->with('title', $title);
    }
    public function allowBlog($id) {
        $posts = DB::table('posts')->where('idPost', $id)
        ->update(['allow' => '0']);
        return redirect('admin/allow-blog');
    }
    public function managerBlogView() {
        $title = 'Quản lí bài viết';
        $posts = DB::table('posts')->where('allow', '0')->get();
        return view('admin.manager_blog', compact('posts'))->with('title', $title);
    }
    public function unpublicBlog($id) {
        $posts = DB::table('posts')->where('idPost', $id)
        ->update(['public' => '0']);
        return redirect('admin/manager-blog');
    }
    public function publicBlog($id) {
        $posts = DB::table('posts')->where('idPost', $id)
        ->update(['public' => '1']);
        return redirect('admin/manager-blog');
    }
    public function deleteBlog($id) {
        $posts = DB::table('posts')->where('idPost', $id)
        ->delete();
        return redirect('admin/manager-blog');
    }
    public function managerUserView() {
        $title = 'Quản lí người dùng';
        $users = DB::table('users')->where('level', '0')->get();
        return view('admin.manager_user', compact('users'))->with('title', $title);
    }
    public function block($id) {
        $user = DB::table('users')->where('id', $id)
        ->update(['block' => '1']);
        return redirect('admin/manager-user');
    }
    public function unBlock($id) {
        $user = DB::table('users')->where('id', $id)
        ->update(['block' => '0']);
        return redirect('admin/manager-user');
    }
    public function deleteUser($id) {
        $user = DB::table('users')->where('id', $id)
        ->delete();
        return redirect('admin/manager-blog');
    }
}
