@extends('layouts/products_layout')

@section('title')
All Products
@endsection

@section('content')
@foreach($products as $product)
<h1>{{$product->name}}</h1>
<p>{{$product->desc}}</p>
<span>{{$product->price}}</span>
@endforeach
@endsection