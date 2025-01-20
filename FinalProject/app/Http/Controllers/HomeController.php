<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())

        {

            $post= Post::all();

            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage',compact('post'));
            }
            else if($usertype== 'admin')
            {
                return redirect()->route('admin.home'); // For admin redirection
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {

        $post = Post::all();
        return view('home.homepage',compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details',compact('post'));
    }
}

