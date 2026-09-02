@extends('Layouts.master')
@section('content')
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Site</span> Sections</h3>

					</div>
				</div>
			</div>

			<div class="row">
			@foreach ($categories as $item)
	<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/product/{{$item->id}}"><img src="{{asset($item->imagePath)}}"
                                style="height: 250px; width: 100%; object-fit: cover;" alt=""></a>
						</div>
						<h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
				</div>
			</div>
            @endforeach
		</div>
	</div>
@endsection
