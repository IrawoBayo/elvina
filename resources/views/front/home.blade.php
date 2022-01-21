@extends('front.master')

@section('title', 'Home Page')
@section('content')




<main role="main">

  
<div class="owl-carousel slide-one-item">
      <a href="#"><img src="{{URL::asset('dist/img/slide 1.jpg')}}" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="{{URL::asset('dist/img/slide 2.jpg')}}" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="{{URL::asset('dist/img/slide 3.jpg')}}" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="{{URL::asset('dist/img/slide 4.jpg')}}" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="{{URL::asset('dist/img/slide 5.jpg')}}" alt="Image" class="img-fluid"></a>
  </div>
  

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">

          @forelse($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">

                <img class="card-img-top" src="{{url('images', $product->image)}}" alt="Card image cap">
                
                <div class="card-body">
                  <del> # {{ $product->pro_price}}</del>
                  <span class="price text-muted float-right">{{$product->spl_price}}</span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{url('productDetail', $product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                      <a href="{{url('cart/addItem', $product->id)}}" class="btn btn-sm btn-outline-secondary">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty

          <h3>No Products</h3>

            @endforelse
          



        </div>
      </div>
    </div>
</main>




@endsection

