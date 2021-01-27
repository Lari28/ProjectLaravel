<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Lista Produse</title>
 <!-- Bootstrap CSS File -->
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 2 meta tags must come first in the head; any other head content must come
after these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <nav class="navbar navbar-default">
 <div class="container-fluid">
 <div class="navbar-header">
 <a class="navbar-brand" href="#">Exemplu aplicatie-Laravel CRUD </a>
 </div>
 <ul class="nav navbar-nav">
 </ul>
 </div>
 </nav>
 <head>
 <h1></h1>
 </head>

 
@extends('layouts.master')
@section('content')
@if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
 Lista produselor
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/products/create" class="btn btn-default">Adaugare Produs nou</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">No</th>
 <th>Nume</th>
 <th>Descriere</th>
<th>Photo</th>
<th>Price</th>
<th>Created at</th>
<th>Updated at</th>
 <th width="300">Actiune</th>
 </tr>
 @if (count($products) > 0)
 @foreach ($products as $key => $product)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $product->name }}</td>
 <td>{{ $product->description }}</td>
<td>{{ $product->photo}}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->created_at }}</td>
<td>{{ $product->updated_at }}</td>
 <td>
 <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Vizualizare</a>
 <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Modificare</a>
 {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) }}
 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
 {{ Form::close() }}
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">Nu exista produse!</td>
 </tr>
 @endif
 </table>
<!-- Introduce nr pagina -->
{{$products->render()}}
 </div>
 </div>
@endsection

  </div>
</body>
</html>
