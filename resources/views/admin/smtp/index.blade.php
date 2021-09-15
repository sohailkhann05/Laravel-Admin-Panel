@extends('layouts.admin')
@section('title','SMTP Settings')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">SMTP Settings</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Successful.</p>
		@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					SMTP Settings
					@if($smtp)
						<a href="{{ route('smtp.edit',$smtp->smtp_slug) }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
		                	Update
		               	</a>
	               	@else
						<a href="{{ route('smtp.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
		                	<i class="mdi mdi-plus"></i>
		               		SMTP
		               	</a>
	               	@endif
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Driver</td>
									<td>{{ $smtp->driver }}</td>
								</tr>
								<tr>
									<td>Host</td>
									<td>{{ $smtp->host }}</td>
								</tr>
								<tr>
									<td>Port</td>
									<td>{{ $smtp->port }}</td>
								</tr>
								<tr>
									<td>E-Mail address</td>
									<td>{{ $smtp->username }}</td>
								</tr>
								<tr>
									<td>Account Password</td>
									<td>{{ $smtp->password }}</td>
								</tr>
								<tr>
									<td>Encryption</td>
									<td>{{ $smtp->encryption }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection