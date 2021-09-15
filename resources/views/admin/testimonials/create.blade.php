@extends('layouts.admin')
@section('title','Add Testimonial')
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
	                	<li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Testimonial added successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Testimonial Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/testimonials') }}" method="POST" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="name" placeholder="Name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Picture</label>
									<small class="field-required"> *</small>
									<input type="file" class="form-control" name="picture" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Customer Feedback</label>
									<small class="field-required"> *</small>
									<textarea rows="3" class="form-control" placeholder="Write here..." name="feedback" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Testimonial</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection