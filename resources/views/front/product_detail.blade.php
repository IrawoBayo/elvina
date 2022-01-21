@extends('front.master')

@section('title', 'Detail Page')
@section('content')


<div class="container">

	<div class="panel header">

		<h3 class="page-header"><i class="fa fa-file-text-o"></i><b>WishList Products</b></h3>
		
	</div>

	<br><br>




	<div class="row">

		@foreach($products as $product)

		<div class="col-md-6 col-xs-12">

			<div class="thumbnail">

				<img src="{{url('images', $product->image)}}" class="card-img">
				
			</div>
			
		</div>

		<div class="col-md-5 col-md-offset-1">

			<H3 class="text-primary"><u>Product Details</u></H3>

			<h2><?php echo ucwords($product->pro_name); ?></h2>

			<h5>{{$product->pro_info}}</h5>

			<h2 class="text-danger"># {{$product->pro_price}}</h2>

			<p><b>Available : {{$product->stock}} In Bundle/ <i class="text-success">You can purchase in Yards</i></b></p>

			<a href="{{url('cart/addItem', $product->id)}}" class="btn btn-sm btn-outline-primary">Add to Cart<i class="fa fa-shopping-cart"></i></a>

			<br><br>

			<?php

			$wishlistData=DB::table('wishlist')->rightJoin('products', 'wishlist.pro_id', '=', 'products.id')
			->where('wishlist.pro_id','=',$product->id)->get();
			$count=App\Wishlist_model::where(['pro_id'=>$product->id])->count();

			if ($count=="0") {
				
			?>

				<form action="{{route('addToWishList')}}" method="post" role="form">

					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<input type="hidden" name="pro_id" value="{{$product->id}}">

					<button type="submit" class="btn btn-success">Add to Wishlist</button>
					
				</form>

			<?php }else{?>

				<h3 style="color: green"><a href="{{url('/WishList')}}">Already Added to Wishlist</a></h3>

			<?php }?>

		</div>

		@endforeach






		
	</div>

	<br><br>
	
</div>


@endsection