<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;
use App\Work;
use App\Image;
use Validator;
use DB;

class WorksController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($id)
	{
		$work = Client::find($id)->work;
		$images = Work::find($work->id)->images;

		session()->put('work', $work);

		return view('admin.works.index')->with('work', $work)->with('images',$images)->with('client', session()->get('client'));
   }

	public function get($id){
		$work = Client::find($id)->work;
		$images = Work::find($work->id)->images;

		$work = json_decode($work->toJson());
		$images = json_decode($images->toJson());
		$work -> images = $images;
		
		return json_encode($work);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($id)
	{
		$client = Client::find($id);        
		session()->put('client',$client);

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
			'description'	=>	'required'
		]);

		// $time = strtotime("now");
		// $files= [];
		// $files = $request->file('originalImgName');

		// foreach ($files as $file) {
		// 	$rules = array('file' => 'required|image');
		// 	$validator = Validator::make(array('file'=> $file), $rules);

		// 	if ($validator->fails()) {
		// 		return redirect("admin.works.create")->withErrors($validator);
		// 	}
		// }

		$work = new Work();
		$work -> title = $request -> title;
		$work -> description = $request -> description;
		$client = session()->get('client');
		
		$work -> client_id = $client->id;

		$client = Client::find($client->id);
		$client -> hasWork = 1;
		$client -> save();

		$work -> save();

		// $work = DB::table('works')->where('title', $request->title)->orderBy('created_at', 'desc')->first();

		// foreach ($files as $file) {
		// 	$image = new Image();

		// 	$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();

		// 	$file->move(base_path().'/public/img/', $filename);

		// 	$image -> image = $filename;
		// 	$image -> originalName = $file->getClientOriginalName();
		// 	$image -> work_id = $work->id;

		// 	$image -> save();
		// }


		return redirect() -> route('admin.works.index', $client->id);
	}

	public function addImg($id){
		return view('admin.works.add')->with('client', session()->get('client'));
	}

	public function storeImg(Request $request)
	{
		$time = strtotime("now");
		$files= [];
		$files = $request->file('originalImgName');

		$work = session()->get('work');

		foreach ($files as $file) {
			$image = new Image();

			$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();

			$file->move(base_path().'/public/img/', $filename);

			$image -> image = $filename;
			$image -> originalName = $file->getClientOriginalName();
			$image -> work_id = $work->id;

			$image -> save();
		}

		return response()->json(['success', 200]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{	
		$image = Image::find($id);

		return view('admin.images.show')->with('image', $image);
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

	public function editImg($id)
	{
		$image = Image::find($id);

		return view('admin.images.edit')->with('image', $image);
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
			'description'	=>	'required'
		]);

		$work = Work::find($id);

		$time = strtotime("now");

		$work -> title = $request -> title;
		$work -> description = $request -> description;
		
		$work -> save();

		return redirect() -> route('admin.works.index', session()->get('client'));
	}

	public function updateImg(Request $request, $id)
	{
		$this -> validate($request,[
			'originalImgName'  =>   'required|image'
		]);
		$image = Image::find($id);

		$file = $request->file('originalImgName');
		$time = strtotime("now");

		if ($file->getClientOriginalName() != $image -> originalName) {
			$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
				$file->move(
						base_path().'/public/img/', $filename
				);
			$image -> image = $filename;
			$image -> originalName = $request->file('originalImgName')->getClientOriginalName();

			$image->save();
		}

		return redirect() -> route('admin.clients.show', session()->get('client')->id);
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

		$client = session()->get('client');
		$client = Client::find($client->id);
		$client -> hasWork = 0;
		$client -> save();

		$work -> delete();

		return redirect() -> route('admin.clients.index', session()->get('category'));
	}

	public function destroyImg($id)
	{
		$image = Image::find($id);

		$image -> delete();

		return redirect() -> route('admin.clients.show', session()->get('client')->id);
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
