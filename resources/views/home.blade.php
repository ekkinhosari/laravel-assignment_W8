@extends('base.base')

@section('content')
    <h2>This is my Home Page</h2>
    <p>Product Name: {{ $product_name }}</p>
    <p>Category: {{ $category }}</p>
    <p>{!! $button !!}</p>
@endsection