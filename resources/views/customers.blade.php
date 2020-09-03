@extends('layouts/customers_layout')

@section('title')
All Customers
@endsection

@section('content')
@foreach($customers as $customer)
<h1>{{$customer->customerName}}</h1>
<div>{{$customer->customerEmail}}</div>
<span>{{$customer->customerPhone}}</span>
<div>{{$customer->customerCity}}</div>
@endforeach
@endsection