<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Client;
use App\Work;
use App\Quote;
use App\Seo;
use Validator;
use Mail;
use SEOMeta;
use App\ClientV;

class mainController extends Controller
{
	public function index(){
		$quotes = Quote::all();
		$seo = Seo::first();
		$kw = explode(',', $seo->keywords);

		SEOMeta::setTitle($seo->title);
		SEOMeta::setDescription($seo->description);
		SEOMeta::addKeyword($kw);

		$clients = ClientV::all();
		$clients->toJson();

		return view('index')->with('quotes', $quotes)->with('clients', $clients);
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

	public function cv (Request $request){

		$validator = Validator::make($request->all(), [
			'cv' => 'required|mimes:pdf'
			]);

		if ($validator->fails()) {
			return redirect("/#trabajo-section")
			->withErrors($validator);
		}
		$path = $request->cv->getRealPath();
		$name = $request->cv->getClientOriginalName();
		$mime = $request->cv->getMimeType();

		$sent= Mail::send('mail.cv', array('cv' => 'Nuevo CV/Portafolio'), function ($m) use ($path, $name, $mime){
			$m->to("");
			$m->subject("Trabajo");
			$m->attach($path, array(
				'as' => $name, 
				'mime' => $mime));
		});

		if (!$sent) {
			$request->session()->flash('cv','CV no pudo ser enviado. Intente nuevamente!');
			return redirect('/#trabajo-section');
		}

		$request->session()->flash('cv','CV ha sido enviado!');
		return redirect('/#trabajo-section');
	}
}
