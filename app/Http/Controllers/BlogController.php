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

class BlogController extends Controller
{
    //
    public function postViewCare(){
        # code...
        if (Auth::check()){
            $value = 'chăm sóc';
            $lastPosts = DB::table('posts')
                ->join('users', 'authorId', '=', 'users.id')
                ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
            $hotPosts = DB::table('posts')
                ->join('users', 'authorId', '=', 'users.id')
                ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
            return view('user.post_take_care', compact('hotPosts', 'lastPosts'))->with('value', $value);
        }
        return redirect('index')->with('emptyLogin', 'Chưa đăng nhập!');
    }
    public function postViewDiscuss(){
        # code...
        if (Auth::check()){
            $value = 'thảo luận';
            $lastPosts = DB::table('posts')
                ->join('users', 'authorId', '=', 'users.id')
                ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
            $hotPosts = DB::table('posts')
                ->join('users', 'authorId', '=', 'users.id')
                ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
            return view('user.post_take_care', compact('hotPosts', 'lastPosts'))->with('value', $value);
        }
        return redirect('index')->with('emptyLogin', 'Chưa đăng nhập!');
    }
    public function uploadPost(Request $req){
        $post = new post;
        // $published = 0;
        if ($req->file) {
            if($req->category == "chăm sóc"){
                $image = time().'_'.$req->file->getClientOriginalName();
                $imagePath = $req->file('file')->storeAs('post_take_care', $image, 'public');
                $post->authorId = Auth::user()->id;
                $post->category = $req->category;
                $post->title = $req->title;
                $post->imagePath = 'storage/app/public/'.$imagePath;
                $post->slug = $req->slug;
                $post->content = $req->txtEditContent;
                $post->save();
                return back()->with('success','Thông báo đã được đăng thành công.');
            }
            if($req->category == "thảo luận"){
                $image = time().'_'.$req->file->getClientOriginalName();
                $imagePath = $req->file('file')->storeAs('post_take_care', $image, 'public');
                $post->authorId = Auth::user()->id;
                $post->category = $req->category;
                $post->title = $req->title;
                $post->imagePath = 'storage/app/public/'.$imagePath;
                $post->slug = $req->slug;
                $post->content = $req->txtEditContent;
                $post->save();
                return back()->with('success','Thông báo đã được đăng thành công.');
            }
            if($req->category == "trao đổi"){
                $image = time().'_'.$req->file->getClientOriginalName();
                $imagePath = $req->file('file')->storeAs('post_take_care', $image, 'public');
                $post->authorId = Auth::user()->id;
                $post->category = $req->category;
                $post->title = $req->title;
                $post->imagePath = 'storage/app/public/post_take_care'.$imagePath;
                $post->slug = 'trade/'.$req->slug;
                $post->content = $req->txtEditContent;
                $post->save();
                return back()->with('success','Thông báo đã được đăng thành công.');
            }
            // $post->title = $req->title;
            // $post->slug = $req->slug;
            // $post->content = $req->txtEditContent;
            // $post->imagePath = 'storage/app/public/' . $filePath;
            // $post->save();
            // return redirect('index');
        }

        return back()->with('success','Vui lòng nhập file');
    }
    public function viewBlogTakeCare() {
        $post = post::get()->first();
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
        $posts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0'], ['category', '=', 'chăm sóc']])->orderby('viewCount', 'desc')->get();
        $title = 'Bài viết chăm sóc';
        return view('user.view_blog_all', compact('posts', 'hotPosts', 'lastPosts'))->with('title', $title);
    }
    public function viewBlogHot() {
        $post = post::get()->first();
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
        $posts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->get();
        $title = 'Bài viết nổi';
        return view('user.view_blog_all', compact('posts', 'hotPosts', 'lastPosts'))->with('title', $title);
    }
    public function viewBlogNew() {
        $post = post::get()->first();
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
        $posts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->get();
        $title = 'Bài viết mới';
        return view('user.view_blog_all', compact('posts', 'hotPosts', 'lastPosts'))->with('title', $title);
    }
    public function getSingle($slug){
        # code...
        $post = post::where('slug', $slug)->first();
        $count = $post->viewCount;
        $data = post::where('slug', $slug)->update(['viewCount' => $count+1]);
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
        return view('user.view_post', compact('lastPosts', 'hotPosts'))->with('post', $post);
    }

    public function myBlog() {
        $post = post::get()->first();
        $lastPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('idPost', 'desc')->paginate(3);
        $hotPosts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName')
           ->where([['public', '=', '1'],['allow', '=', '0']])->orderby('viewCount', 'desc')->paginate(3);
        $posts = DB::table('posts')
           ->join('users', 'authorId', '=', 'users.id')
           ->select('posts.*', 'users.id', 'users.firstName', 'users.lastName', 'users.userName')
           ->where([['public', '=', '1'],['allow', '=', '0'], ['userName', '=', Auth::user()->userName]])->orderby('idPost', 'desc')->get();
        $title = 'Bài viết của bạn';
        return view('user.view_blog_all', compact('posts', 'hotPosts', 'lastPosts'))->with('title', $title);
    }
}
