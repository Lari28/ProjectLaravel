@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">Adaugă Produs nou</div>
 <div class="panel-body">
@if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Errors:</strong>
 <ul>
@foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
 {{ Form::open(array('route' => 'products.store','method'=>'POST')) }}

<div class="form-group">
<label for="name">Nume</label>
<input type="text" name="name" class="form-control" value="{{old('name') }}">
</div>

<div class="form-group">
<label for="description">Descriere</label>
<textarea name="description" class="form-control" rows="3">{{old('description')
}}</textarea>
</div>

<div class="form-group">
<label for="photo">Photo</label>
<textarea name="photo" class="form-control" rows="3">{{old('photo')
}}</textarea>
</div>

<div class="form-group">
<label for="price">Price</label>
<input type="text" name="price" class="form-control" value="{{old('price') }}">
</div>

<div class="form-group">
<label for="created_at">Created at</label>
<input type="text" name="created_at" class="form-control" value="{{old('created_at') }}">
</div>

<div class="form-group">
<label for="updated_at">Updated at</label>
<input type="text" name="updated_at" class="form-control" value="{{old('updated_at') }}">
</div>

<div class="form-group">
<input type="submit" value="Adauga Produs" class="btn btn-info">
<a href="{{ route('products.index') }}" class="btn btndefault">Cancel</a>
</div>
 {{ Form::close() }}
</div>
</div>
@endsection
