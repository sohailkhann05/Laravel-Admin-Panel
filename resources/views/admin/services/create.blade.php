@extends('layouts.admin')
@section('title','Add Service')
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
	                  		<a href="{{ route('services.index') }}">Services</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Add Service</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Service added successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Service Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/services') }}" method="POST" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Title</label>
									<small class="field-required"> *</small>
									<input type="text" name="title" class="form-control" placeholder="Service Title" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Icon</label>
									<small class="field-required"> *</small>
									<input type="file" name="icon" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Description</label>
									<small class="field-required"> *</small>
									<textarea name="description" rows="3" class="form-control" placeholder="Write here..." required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Service</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection