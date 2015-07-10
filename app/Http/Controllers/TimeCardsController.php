<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TimeCard;

class TimeCardsController extends Controller
{
	public function getRegister()
	{
		return view('time_cards.register');
	}

	public function postRegister()
	{
		return view('time_cards.register');
	}

	public function index()
	{
		$time_cards = TimeCard::all();
		return view('time_cards.index',compact('time_cards'));
	}
}
