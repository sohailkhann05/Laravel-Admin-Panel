@extends('layouts.admin')
@section('title','Add SMTP')
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
	                  		<a href="{{ route('smtp.index') }}">SMTP Settings</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">ADD SMTP</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">SMTP Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/smtp') }}" method="POST" onsubmit="return loadingBtn(this)">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Driver</label>
									<small class="field-required"> * e.g. smtp.</small>
									<input type="text" class="form-control" name="driver" placeholder="Driver" required>
								</div>
								<div class="form-group">
									<label for="">Port</label>
									<small class="field-required"> * e.g. 587.</small>
									<input type="text" class="form-control" name="port" placeholder="Port" required>
								</div>
								<div class="form-group">
									<label for="">G-Mail password</label>
									<small class="field-required"> * e.g. account password.</small>
									<input type="text" class="form-control" name="password" placeholder="Account Password" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Host</label>
									<small class="field-required"> * e.g. smtp.mailtrap.io</small>
									<input type="text" class="form-control" name="host" placeholder="Host" required>
								</div>
								<div class="form-group">
									<label for="">G-Mail address</label>
									<small class="field-required"> * e.g. text@gmail.com.</small>
									<input type="text" class="form-control" name="username" placeholder="Email address" required>
								</div>
								<div class="form-group">
									<label for="">Encryption</label>
									<small class="field-required"> * e.g. tls,ssl.</small>
									<input type="text" class="form-control" name="encryption" placeholder="Encryption" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add SMTP</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection