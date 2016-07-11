<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Client;
use App\Work;
use Validator;
use Mail;

class mainController extends Controller
{
	public function index(){
		return view('index');
	}

	public function contact (Request $request){

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required|email',
			'motivation' => 'required',
			'message' => 'required'
			]);

		if ($validator->fails()) {
			return redirect("/#contact-section")
			->withErrors($validator);
		}

		$contact = [];
		$contact['name'] = $request -> name;
		$contact['email'] = $request -> email;
		$contact['motivation'] = $request -> motivation;
		$contact['message'] = $request -> message;

		$sent= Mail::send('mail.contact', array('contact' => $contact), function ($m){
			$m->to("o0serras0o@gmail.com");
			$m->subject("It's alive!");
		});

		if (!$sent) {
			$request->session()->flash('mail','Email could not be delivered. Please try again later!');
			return redirect('/#contact-section');
		}

		$request->session()->flash('mail','Email has been sent!');
		return redirect('/#contact-section');
	}
}
