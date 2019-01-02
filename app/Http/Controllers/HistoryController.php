<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Price;
use Auth;

class HistoryController extends Controller
{
    function index($name){
    	$changed = str_replace('-', ' ', $name);
    	$item = Item::where('name', $changed)->firstOrFail();

    	return view('public.history.index', compact('item'));

    	//return str_replace(' ', '-', $name);
    }

    public function edit($name, Request $request){
		$this->validate($request, [
            'price' => 'integer|required',
            'amount' => 'integer|required',
        ]);

        $item = Item::where('name', $name)->firstOrFail();
		//$item = $name;

		$item->price = $request->price;
		$item->amount = $request->amount;
		$item->lastedit = Auth::User()->name;

		$item->save();

		$price = new Price;

		$price->name = $name;
		$price->price = $request->price;
		$price->amount = $request->amount;
		$price->editedby = Auth::User()->name;

		$price->save();

		return redirect('/');

    }
}
