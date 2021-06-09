@extends('layout')
@section('content')
    <div>
        @foreach($products as $item)
            <div id="product-card">
                <h3>{{$item->name}}</h3>
                <div id="description">{{$item->description}}</div>
                <div id="price">{{$item->price}}</div>
            </div>
        @endforeach
    </div>
@endsection
