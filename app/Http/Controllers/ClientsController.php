<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;
use App\Category;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	$category = Category::find($id);
        $clients = Category::find($id)->clients;

        session()->put('category', $category);

        return view('admin.clients.index')->with('clients', $clients)->with('category', session()->get('category'));
    }

    public function get($id){
    	$clients = Category::find($id)->clients;

    	return $clients->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.clients.create')->with('category', session()->get('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this -> validate($request,[
			'name'  =>         'required',
			'originalImgName'   =>    'required|image'
		]);

		$time = strtotime("now");

		if ($request->file('originalImgName')) 
			$file = $request->file('originalImgName');


		if(!empty($file)){
			$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
			$file->move(
				base_path().'/public/img/', $filename
				);
		}

		$client = new Client();
		$client -> name = $request -> name;
		$client -> image = $filename;
		$client -> originalImgName = $request->file('originalImgName')->getClientOriginalName();
        $client -> hasWork = 0;

		$category = session()->get('category');
		$client-> category_id = $category->id;

		$client -> save();

		return redirect() -> route('admin.clients.index', $category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	
    	$client = Client::find($id);
    	session()->put('client',$client);

    	return redirect() -> route('admin.works.index', $client->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$client = Client::find($id);

    	return view('admin.clients.edit')->with('client', $client)->with('category',session()->get('category'));
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
    	$this -> validate($request,[
			'name'  =>         'required',
			'originalImgName'   =>    'image',
		]);

		$client = Client::find($id);
		$time = strtotime("now");

		if ($request->file('originalImgName')) 
			$file= $request->file('originalImgName');

		if(!empty($file)){
			if ($file->getClientOriginalName() != $client -> originalImgName) {
				$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
				$file->move(
						base_path().'/public/img/', $filename
				);
				$client -> image = $filename;
				$client -> originalImgName = $request->file('originalImgName')->getClientOriginalName();
			}
		}

		$client -> name = $request -> name;
		
		$client -> save();

		return redirect() -> route('admin.clients.index', session()->get('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$client = Client::find($id);

		$client -> delete();

		return redirect() -> route('admin.clients.index', session()->get('category'));
    }

    public  function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}

		return $str;
	}
}
