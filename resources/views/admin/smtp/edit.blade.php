@extends('layouts.admin')
@section('title','Update SMTP')
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
	                	<li class="breadcrumb-item active" aria-current="page">Update SMTP</li>
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
					<form action="{{ url('/admin/smtp',$smtp->smtp_slug) }}" method="POST" onsubmit="return loadingBtn(this)">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Driver</label>
									<small class="field-required"> * e.g. smtp.</small>
									<input type="text" class="form-control" name="driver" value="{{ $smtp->driver }}" required>
								</div>
								<div class="form-group">
									<label for="">Port</label>
									<small class="field-required"> * e.g. 587.</small>
									<input type="text" class="form-control" name="port" value="{{ $smtp->port }}" required>
								</div>
								<div class="form-group">
									<label for="">G-Mail password</label>
									<small class="field-required"> * e.g. account password.</small>
									<input type="text" class="form-control" name="password" value="{{ $smtp->password }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Host</label>
									<small class="field-required"> * e.g. smtp.mailtrap.io</small>
									<input type="text" class="form-control" name="host" value="{{ $smtp->host }}" required>
								</div>
								<div class="form-group">
									<label for="">G-Mail address</label>
									<small class="field-required"> * e.g. text@gmail.com.</small>
									<input type="text" class="form-control" name="username" value="{{ $smtp->username }}" required>
								</div>
								<div class="form-group">
									<label for="">Encryption</label>
									<small class="field-required"> * e.g. tls,ssl.</small>
									<input type="text" class="form-control" name="encryption" value="{{ $smtp->encryption }}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Update SMTP</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection