@extends('layouts.master')
@section('title')
	Laravel shopping cart
@endsection

@section('content')
<?php
 $count = count($products);
 $i=0;
 // 1 2 3 4 5 6
?>
@foreach($products->chunk(3) as $productChunk)
	<div class="row">
    @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{$product->title}}</h3>
                    <p class="description">{{$product->description}}</p>
                    <div class="clearfix">
                        <div class="pull-left price">${{$product->price}}</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@endsection
