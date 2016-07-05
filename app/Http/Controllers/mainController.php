<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Client;
use App\Work;

class mainController extends Controller
{
	public function index(){
		$client= Category::find(1)->clients;
		$work = [];

		foreach ($client as $key) {
			$work[$key->id] = Client::find($key->id)->works;
		};

		return view('index')->with('client',$client)->with('work',$work);
	}
}
