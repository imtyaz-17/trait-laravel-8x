<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Traits\GetItemQueryTrait;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    use ImageTrait, GetItemQueryTrait;
    public function create(){
        $items = $this->getAllItem();
        return response()->json($items);
    }
    public function store(Request $request){
        $input  = $request->all();
        $input['image']=$this->verifyAndUpload($request,'image','images');
        Item::create($input);
        return redirect()->back()->with('success','Image Upload Successfully');
    }
}
