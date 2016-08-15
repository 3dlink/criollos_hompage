<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClientV;

class ClientVsController extends Controller
{
	public function index()
	{
		$clients = ClientV::paginate(5);

		return view('admin.clientv.index')->with('clients', $clients);
	}

	// public function get(){
	// 	$clients = ClientV::all();
 //        $clients->toJson();

 //        $response = [];

 //        for ($i = 0; $i < count($clients); $i++) {
 //            array_push($response, $clients[$i]->image);
 //        }

	// 	return $response;
	// }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.clientv.create');
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

    	$client = new ClientV();
    	$client -> name = $request -> name;
    	$client -> image = $filename;
    	$client -> originalImgName = $request->file('originalImgName')->getClientOriginalName();

    	$client -> save();

    	return redirect() -> route('admin.clientv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	
    	$client = ClientV::find($id);

    	return view('admin.clientv.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$client = ClientV::find($id);

    	return view('admin.clientv.edit')->with('client', $client);
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

    	$client = ClientV::find($id);
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

    	return redirect() -> route('admin.clientv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$client = ClientV::find($id);

    	$client -> delete();

    	return redirect() -> route('admin.clientv.index');
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
