@extends('layouts.admin')
@section('title','Update Testimonial')
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
	                  		<a href="{{ route('testimonials.index') }}">Testimonials</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $testimonial->name }}</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Testimonial updated successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Testimonial Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/testimonials',$testimonial->id) }}" method="POST" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="name" value="{{ $testimonial->name }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Picture</label>
									<small class="field-required"> * Can be null.</small>
									<input type="file" class="form-control" name="picture">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Customer Feedback</label>
									<small class="field-required"> *</small>
									<textarea rows="3" class="form-control" name="feedback" required>{{ $testimonial->feedback }}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Update Testimonial</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection