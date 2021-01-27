<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
class ProductController extends Controller
{

 public function index(Request $request)          //afisarea produselor pe pagina principala (cate 5 pe pagina)
 {
 	$products = Product::orderBy('name','ASC')->paginate(5);
 	$value=($request->input('page',1)-1)*5;
 	return view('products.list',compact('products'))->with('i',$value);
 }

 public function create()
 {
 	return view('products.create');
 }

 public function store(Request $request)
 {
 	$this->validate($request, ['name' => 'required','description' => 'required','photo' => 'required','price' => 'required','created_at' => 'required','updated_at' => 'required']);
 	// create new product
 	Product::create($request->all());
 	return redirect()->route('products.index')->with('success', 'Your product added successfully!');
 }

 public function show($id)
 {
 	$product = Product::find($id);
 	return view('products.show',compact('product'));
 }

 public function edit($id)
 {
 	$product = Product::find($id);
 	return view('products.edit', compact('product'));
 }

 public function update(Request $request, $id)             //modificarea unui produs
 {
 	$this->validate($request, [
 	'name' => 'required',
 	'description' => 'required',
	'description' => 'required',
	'photo' => 'required',
	'price' => 'required',
	'created_at' => 'required',
	'updated_at' => 'required'
 	]);
 	Product::find($id)->update($request->all());
 	return redirect()->route('products.index')->with('success','Product updated successfully');
 }

 public function destroy($id)              //stergerea unui produs
 {
 	Product::find($id)->delete();
 	return redirect()->route('products.index')->with('success','Product removed successfully');
 }

}
