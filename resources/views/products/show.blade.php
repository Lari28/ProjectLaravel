@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">
 View Products
 </div>
 <div class="panel-body">
 <div class="pull-right">
 <a class="btn btn-default" href="{{ route('products.index') }}">Inapoi</a>
 </div>

 <div class="form-group">
 <strong>Nume: </strong> {{ $product->name }}
 </div>

 <div class="form-group">
 <strong>Descriere: </strong> {{ $product->description }}
 </div>

<div class="form-group">
 <strong>Photo: </strong> {{ $product->photo }}
 </div>

<div class="form-group">
 <strong>Price: </strong> {{ $product->price }}
 </div>

<div class="form-group">
 <strong>Created_at: </strong> {{ $product->created_at }}
 </div>

<div class="form-group">
 <strong>Updated_at: </strong> {{ $product->updated_at }}
 </div>

 </div>
 </div>
@endsection
