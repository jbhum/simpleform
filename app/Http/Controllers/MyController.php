<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\response;

use Request;

class MyController extends Controller {

	public function form() 
	{
		return view('myform');
	}

	public function home()
	{
		return view('home');
	}

	public function responses()
	{
		$responses = response::all();
		//$responses = [];
		return view('user_responses', compact('responses'));
	}

	public function store()
	{
		$input = Request::all();
		$response = new Response;
		$response->name = $input['user_name'];
		$response->email = $input['user_email'];
		$response->phone = $input['user_phone'];
		$response->comments = $input['user_comments'];
		$response->reason = $input['user_reason'];
		$response->respond = $input['user_contact'];
		$response->date = $input['user_time'];
		return $response;
	}
}
