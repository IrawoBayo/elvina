@extends('front.master')

@section('title','Wish Page')

@section('content')



<div class="container">

	<div class="row">


		<?php

		if($products->isEmpty()){ ?>

		<h4>Sorry, Products not found!</h4>

		<?php } else { ?>

		@foreach ($products as $product)


		<div class="col-md-4 col-sm-4">

				<br>
			
			<div class="text-center">
				<a href="{{url('/product_details', $product->id)}}">
					<img src="{{url('images',$product->image)}}" alt="" width="200">
				</a>

				<h2>$ {{$product->pro_price}}</h2>

				<p>
					<a href="{{url('/product_details', $product->id)}}">
						{{$product->pro_name}}
					</a>
				</p>
				<a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-success add-to-cart">
					<i class="fa fa-shopping-cart"></i>Add to cart</a>

				<a href="{{url('/')}}/removeWishList/{{$product->id}}" class="btn btn-default btn-block text-danger">
					<i class="fa fa-minus-square"></i>Remove from list</a>
				<br>
			</div>
		</div>

		@endforeach

		<?php } ?>
	</div>
	
</div>

@endsection