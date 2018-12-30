<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Item;
use App\User;

class ItemController extends Controller
{
	public function index(){

		$items = Item::where('nullable', 0)->take(10)->get();
		$daily = Item::where('daily', 1)->take(2)->get();



		return view('public.index', compact('items', 'daily'));
	}

	public function search(Request $request){

		$s = $request->input('s');
		
		$items= Item::where('name', 'LIKE', '%' .$s. '%')->where('nullable', '0')->get();

		return view('public.search', compact('items', 's'));
		
	}



    public function update(){
    	
    	$txt_file    = file_get_contents('//File');
		$rows        = explode("\n", $txt_file);
		array_shift($rows);

			foreach($rows as $row => $data){
			    //get row data
			    $row_data = explode('|', $data);

			    $info[$row]['id']               = $row_data[0];
			    $info[$row]['itemname']         = $row_data[1];
			    $info[$row]['rarity']           = $row_data[2];
			    $info[$row]['properties']       = $row_data[3];
			    $info[$row]['category']         = $row_data[4];
			    $info[$row]['basecolor']       = $row_data[5];
			    $info[$row]['overlaycolor']       = $row_data[6];
			    $info[$row]['hitstobreak']       = $row_data[7];
			    $info[$row]['growtime']       = $row_data[8];
			    $info[$row]['clothingtype']       = $row_data[9];


				$item = Item::where('id', '=', Input::get('id'))->first();
				if ($item === null) {
				    
				    $item = new Item;
		        
			        $item->id = $info[$row]['id'];
			        $item->name = $info[$row]['itemname'];
			        $item->rarity = $info[$row]['rarity'];
			        $item->properties = $info[$row]['properties'];
			        $item->category = $info[$row]['category'];
			        $item->baseColor = $info[$row]['basecolor'];
			        $item->overlayColor = $info[$row]['overlaycolor'];
			        $item->hitsToBreak = $info[$row]['hitstobreak'];
			        $item->growtimeInSeconds = $info[$row]['growtime'];
			        $item->clothingType = $info[$row]['clothingtype'];

					$item->save();
				}
				else{
					echo "hello";
				}
			}
	}
}
