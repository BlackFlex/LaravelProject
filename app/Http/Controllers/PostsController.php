<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;
class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   // $posts=Post::all();
        // return Post::where('post_title','post two')->get();
        //  $posts=Post::orderBy('post_title','desc')->take(1)->get();
        //$posts=DB::select('SELECT * FROM post');
        //$posts=Post::orderBy('post_title','desc')->get();
         $posts=Post::orderBy('id','desc')->paginate(3);
        return view('posts/list')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request, [
          'post_title'=>'required',
          'post_text'=>'required',
           'post_image' => 'image|nullable|max:1999'
       ]);


       //handle file upload
       if($request->hasFile('post_image')){
           //get filename fith extention
           $filenameWithExt = $request->file('post_image')->getClientOriginalName();
           //filename
           $filename = pathinfo($filenameWithExt ,PATHINFO_FILENAME);
           //extention
           $extention = $request->file('post_image')->getClientOriginalExtension();
           //to store
           $fileNameToStore = $filename."_".time().'.'.$extention;
           //uploadImage
           $path = $request->file('post_image')->storeAs('public/img/post',$fileNameToStore);

       }else{
           $path = 'noimage.jpg';
       }

       $post=new Post;
       $post->post_title=$request->input('post_title');
       $post->post_text=$request->input('post_text');
       $post->user_id=auth()->user()->id;
       $post->post_image=$path;
       $post->save();

       return redirect('/posts')->with('success','Post Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return(view('posts/view')->with('post',$post));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return(view('posts/edit')->with('post',$post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'post_title'=>'required',
            'post_text'=>'required',
        ]);
        $post=Post::find($id);
        $post->post_title=$request->input('post_title');
        $post->post_text=$request->input('post_text');
        $post->save();
        return redirect('/posts')->with('success','Post Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post=Post::find($id);
        if($post->post_image != 'noimage.jpg'){
            Storage::delete($post->post_image);
        }
        $post->delete();

        if($post->post_image!='noimage.jpg')
        {
            Storage::delete($post->post_image);
        }

        return redirect('/posts')->with('success','Post Deleted');
    }
}
