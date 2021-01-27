<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class PagesController extends Controller
{
 public function despre(){
//variabila de tip array care se trimit la view
return view('pages.despre')->with(['name'=>"vavrvar", 'prenume'=>"Filimon"]);
}
public function index(){
return view('pages.index');
}
}

