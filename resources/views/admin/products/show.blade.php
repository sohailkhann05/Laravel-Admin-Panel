@extends('layouts.admin')
@section('title','Product Details')
@section('content')

	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('products.index') }}">Products</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					{{ $product->name }} - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('products.edit',$product->product_slug) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Product</th>
									<td>{{ $product->title }}</td>
								</tr>
								<tr>
									<th>Description</th>
									<td>{{ $product->description }}</td>
								</tr>
								<tr>
									<th>Logo</th>
									<td>
										<img src="{{ asset('uploads/products/'.$product->logo) }}" class="img-responsive">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection