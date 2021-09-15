@extends('layouts.admin')
@section('title','Update Office')
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
	                  		<a href="{{ route('offices.index') }}">Offices</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $office->name }}</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Office updated successfully.</p>
		@endif
		</div>
	</div>
<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Office Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/offices',$office->id) }}" method="POST" onsubmit="return loadingBtn(this)">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="name" placeholder="Office Name" value="{{ $office->name }}" required>
								</div>
								<div class="form-group">
									<label for="">Phone</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ $office->phone }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">E-Mail</label>
									<small class="field-required"> *</small>
									<input type="email" name="email" class="form-control" placeholder="E-Maill address" value="{{ $office->email }}" required>
								</div>
								<div class="form-group">
									<label for="">Address</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="address" placeholder="Address" value="{{ $office->address }}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Update Office</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

	
@endsection