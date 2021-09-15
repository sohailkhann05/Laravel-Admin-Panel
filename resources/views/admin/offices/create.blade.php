@extends('layouts.admin')
@section('title','Add Office')
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
	                	<li class="breadcrumb-item active" aria-current="page">Add Office</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Office added successfully.</p>
		@endif
		</div>
	</div>
<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Office Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/offices') }}" method="POST" onsubmit="return loadingBtn(this)">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="name" placeholder="Office Name" required>
								</div>
								<div class="form-group">
									<label for="">Phone</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">E-Mail</label>
									<small class="field-required"> *</small>
									<input type="email" class="form-control" name="email" placeholder="E-Maill address" required>
								</div>
								<div class="form-group">
									<label for="">Address</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="address" placeholder="Address" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Office</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

	
@endsection