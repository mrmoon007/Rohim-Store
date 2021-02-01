<?php

namespace App\Http\Controllers;

use App\products;
use Dotenv\Result\Result;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function create(Request $request){

        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'expiry_date' => 'required',
        ]);

        $product= new products;
        $product->name= $request->name;
        $product->price= $request->price;
        $product->expiry_date= $request->expiry_date;
        $product->save();
        return redirect()->route('product.index');
    }
    public function addProduct(){
        return view('addProduct');
    }

    public function index(){
        $data=products::all();
        return view('all',compact('data'));
    }

    public function view($id)
    {
        $view=products::find($id);
        return view('viewproduct',compact('view'));
    }

    public function edit($id)
    {
        $edit=products::find($id);
        return view('editproduct',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'expiry_date' => 'required',
        ]);

        products::find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'expiry_date' => $request->expiry_date,
        ]);

        return redirect()->back();
    }

    public function delete($id){
        $dValue=products::find($id);
        $dValue->delete();
        return redirect()->back();

    }

    public function search(Request $request)
    {
        $price=$request->price;
        $expiry_date=$request->expiry_date;
        // return $data=$request->all();

        $result=products::query();
        if(!empty($price)){
            $result=$result->where('price',$price);
        }
        if(!empty($expiry_date)){
            $result=$result->where('expiry_date',$expiry_date);
        }


         $result=$result->paginate(3);
        return view('search',compact('result'));

    }
}
