<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SalesData;

class SalesController extends Controller
{
    //
	public function three() {
		$sales_data = SalesData::all();

		return view('sales.three', compact('sales_data'));
	}
	public function edit($user_id) {
		$sales_data = SalesData::all();

		return view('sales.edit', compact('sales_data'));
	}
}
