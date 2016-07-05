<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;
use App\Work;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $works = Client::find($id)->works;

        return view('admin.works.index')->with('works', $works)->with('client', session()->get('client'));
    }

    public function get($id){
    	$works = Client::find($id)->works;

    	return $works->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.works.create')->with('client', session()->get('client'));
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
			'title'  =>         'required',
			'description'	=>	'required',
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

		$work = new Work();
		$work -> title = $request -> title;
		$work -> description = $request -> description;
		$work -> image = $filename;
		$work -> originalName = $request->file('originalImgName')->getClientOriginalName();

		$client = session()->get('client');
		$work-> client_id = $client->id;

		$work -> save();

		return redirect() -> route('admin.works.index', $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$work = Work::find($id);

    	return view('admin.works.edit')->with('work', $work)->with('client',session()->get('client'));
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
			'title'  =>         'required',
			'description'	=>	'required',
			'originalImgName'   =>    'image',
		]);

		$work = Work::find($id);
		$time = strtotime("now");

		if ($request->file('originalImgName')) 
			$file= $request->file('originalImgName');

		if(!empty($file)){
			if ($file->getClientOriginalName() != $work -> originalName) {
				$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
				$file->move(
						base_path().'/public/img/', $filename
				);
				$work -> image = $filename;
				$work -> originalName = $request->file('originalImgName')->getClientOriginalName();
			}
		}

		$work -> title = $request -> title;
		$work -> description = $request -> description;
		
		$work -> save();

		return redirect() -> route('admin.works.index', session()->get('client'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$work = Work::find($id);

		$work -> delete();

		return redirect() -> route('admin.works.index', session()->get('client'));
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
