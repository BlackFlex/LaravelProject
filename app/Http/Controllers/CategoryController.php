<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCategory;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = ServiceCategory::all();
        $category = ServiceCategory::orderBy('id','desc')->paginate(3);
        //$category = DB::select('select * from service_categories');
        return view ('/category/category')->with('category',$category);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('category/catAdd');
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
            'category_title'=>'required',
        ]);
        $post=new ServiceCategory;
        $post->category_title=$request->input('category_title');

        $post->save();

        return redirect('/category')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ankap = ServiceCategory::find($id);
        return view('category/catEdit')->with('ankap',$ankap);

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
            'category_title'=>'required',
        ]);
        $post=ServiceCategory::find($id);
        $post->category_title=$request->input('category_title');

        $post->save();

        return redirect('/category')->with('success','Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=ServiceCategory::find($id);
        $post->delete();
        return redirect('/category')->with('success','CAtegory Deleted');
    }
}
