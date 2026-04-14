@extends('base.base')

@section('content')
    <h1>Ini</h1>
    @foreach ($product_categories as $pc)
        <h5>{{  $pc['name'] }}</h5>
        <p>{{ $pc['description'] }}</p>
    @endforeach
    <img src="{{ asset('store/images/foto.jpg') }}" alt="">
@endsection