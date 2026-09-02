@extends('Layouts.master')
@section('content')
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>

					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($products as $item)
<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset($item->imagePath)}}"
                                  style="height: 250px; width: 100%; object-fit: cover;" alt=""></a>
						</div>
						<h3>{{$item->name}}</h3>
						<p class="product-price"><span>{{$item->quantity}}</span> {{$item->price}}$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</div>
@endsection
