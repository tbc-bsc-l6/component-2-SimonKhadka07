<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype =='user')
            {
                return view('dashboard');
            }

            else if($usertype =='admin')
            {
                return view('admin.index');
            }

            else
            {
                return redirect()->back();
            }
        }
    }

    public function post_page()
    {
        return view('admin.post_page');
    }

    public function  add_post(Request $request)
    {

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;


        $post=new Post;

        $post->title = $request ->title;

        $post->description = $request ->description;

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;


        $post->post = 'active';
        //

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('postimage',$imagename);

        //

        $post->image = $imagename;

        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');

    }

    public function show_post()
    {
        $post = Post::all();

        return view('admin.show_post',compact('post'));
    }


    public function delete_post($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Deleted Succesfully');
    }


    public function edit_page($id)
    {

        $post=Post::find($id);

        return view('admin.edit_page',compact('post'));
    }

    public function update_post(Request $request,$id)
    {
        $data = Post::find($id);

        $data->title=$request->title;

        $data->description=$request->description;

        $image=$request->image;

        if($image)
        {

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $data->image = $imagename;


        }

        $data->save();

        return redirect()->back();

    }

}
