<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloge;

class BlogeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloges = Bloge::all();
		return view('blog.index', compact('bloges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $bloge = $this->validate(request(),[
   
       'title' => 'required',
	   'slug' => 'required',
	   'subject' => 'required'
	   ]);
		
	   Bloge::create($bloge);   
	   return back()->with('success', 'News has been added');;  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bloge = Bloge::find($id);
		return view('blog.detail',compact('bloge','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloge = Bloge::find($id);  
		return view('blog.edit',compact('bloge','id')); 		
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
        $bloge = Bloge::find($id);
		$this->validate(request(), [
		'title' => 'required', 
		'slug' => 'required',
		'subject' => 'required|'  ]);  
		
		$bloge->title = $request->get('title'); 
		$bloge->slug = $request->get('slug');
		$bloge->subject = $request->get('subject');  
		$bloge->save();  
		return redirect('blog')->with('success','News has been updated');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloge = Bloge::find($id);  
		$bloge->delete();  return redirect('blog')->with('success','News has been  deleted'); 
    }
}
