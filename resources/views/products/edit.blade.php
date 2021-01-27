@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading"> Modificare informatii produs</div>
 <div class="panel-body">
<!—exista inregistrari in tabelul products 
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Eroare:</strong>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
<!—populez campurile formularului cu datele aferente din tabela product -->
 {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id]]) !!}

 <div class="form-group">
 <label for="name">Nume</label>
 <input type="text" name="name" class="form-control" value="{{$product->name }}">
 </div>

 <div class="form-group">
 <label for="description">Descriere</label>
 <textarea name="description" class="form-control" rows="3">{{ $product->description
}}</textarea>
 </div>

<div class="form-group">
 <label for="photo">Photo</label>
<textarea name="photo" class="form-control" rows="3">{{ $product->photo}}
</textarea>
 </div>

<div class="form-group">
 <label for="price">Price</label>
 <input type="text" name="price" class="form-control" value="{{$product->price }}">
 </div>

<div class="form-group">
 <label for="created_at">Created at</label>
 <input type="text" name="created_at" class="form-control" value="{{$product->created_at }}">
 </div>

<div class="form-group">
 <label for="updated_at">Updated at</label>
 <input type="text" name="updated_at" class="form-control" value="{{$product->updated_at }}">
 </div>

 <div class="form-group">
 <input type="submit" value="Salvare Modificari" class="btn btn-info">
 <a href="{{route('products.index') }}" class="btn btn-default">Cancel</a>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
@endsection