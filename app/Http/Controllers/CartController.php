<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
public function index()
{
dd('ok');
}
public function create()
{
dd('okokok');
}
public function store(Request $request)
{
$userid=$request->userid;
$productid=$request->productid;
$price=Product::where(['id'=>$productid])->pluck('price')->get();
}

}
