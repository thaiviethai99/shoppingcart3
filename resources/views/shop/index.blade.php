@extends('layouts.master')
@section('title')
	Laravel shopping cart
@endsection

@section('content')
<?php
 $count = count($products);
 $i=0;
?>
@foreach($products as $item)
<?php if($i==0){
    
?>
	<div class="row">
<?php }
$i++;?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$item['imagePath']}}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{$item['title']}}</h3>
                    <p class="description">{{$item['description']}}</p>
                    <div class="clearfix">
                        <div class="pull-left price">${{$item['price']}}</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if($i%3==0){
            $i=0;
        ?>
    </div>
    <?php }?>
    @endforeach
@endsection
