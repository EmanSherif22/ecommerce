@extends('layouts/products_layout')

@section('title')
Prices more than 100$
@endsection

@section('content')
@foreach($products as $product)
<h1>{{$product->name}}</h1>
<p>{{$product->desc}}</p>
<span>{{$product->price}}</span>
@endforeach
@endsection