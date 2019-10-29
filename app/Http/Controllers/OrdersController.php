<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
	public function index() {
		return view('orders.index');
	}

	public function create() {

	}

	public function store(Request $request) {

		$this->validate($request, [
			'title' => 'required',
			'authors' => 'required',
			'copies' => 'required'
		]);

		$order = Order::create($request->all());

		return redirect()->route('pedidos.index');
	}


}
