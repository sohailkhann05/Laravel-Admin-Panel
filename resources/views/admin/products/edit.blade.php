@extends('layouts.admin')
@section('title','Update Product')
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
		@if(session('success'))
			<p class="alert alert-success">Product updated successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Product Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/products',$product->id) }}" method="POST" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="title" value="{{ $product->title }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Logo</label>
									<small class="field-required"> * if old is fine leave this empty</small>
									<input type="file" class="form-control" name="logo">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Description</label>
									<small class="field-required"> *</small>
									<textarea class="form-control" name="description" rows="3" required>{{ $product->description }}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Update Product</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection