@extends('layouts.admin')
@section('title','Settings')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Settings</li>
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
					Settings
					@if($setting)
						<a href="{{ route('settings.edit',$setting->setting_slug) }}" class="btn btn-sm btn-primary" style="float: right;">
							<i class="mdi mdi-table-edit"></i> Update Settings
						</a>
					@else
						<a href="{{ route('settings.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Setting
	               		</a>
	               	@endif
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Fav Icon</td>
									<td>
										<img src="{{ asset('uploads/settings/'.$setting->fav_icon) }}" class="img-responsive" style="width: 50px; height: 50px;">
									</td>
								</tr>
								<tr>
									<td>Logo</td>
									<td>
										<img src="{{ asset('uploads/settings/'.$setting->site_logo) }}" class="img-responsive" style="width: 250px; height: 250px; box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.15);">
									</td>
								</tr>
								<tr>
									<td>Site Name</td>
									<td>{{ $setting->site_name }}</td>
								</tr>
								<tr>
									<td>Opening Day</td>
									<td>{{ $setting->opening_day }}</td>
								</tr>
								<tr>
									<td>Closing Day</td>
									<td>{{ $setting->closing_day }}</td>
								</tr>
								<tr>
									<td>Opening Time</td>
									<td>{{ \Carbon\Carbon::make($setting->opening_time)->format('g:i A') }}</td>
								</tr>
								<tr>
									<td>Closing Time</td>
									<td>{{ \Carbon\Carbon::make($setting->closing_time)->format('g:i A') }}</td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td>{{ $setting->phone_number }}</td>
								</tr>
								<tr>
									<td>E-Mail address</td>
									<td>{{ $setting->email_address }}</td>
								</tr>
								<tr>
									<td>Facebook Link</td>
									<td>{{ $setting->facebook_link }}</td>
								</tr>
								<tr>
									<td>Instagram Link</td>
									<td>{{ $setting->instagram_link }}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>{{ $setting->location_address }}</td>
								</tr>
								<tr>
									<td>Short Info</td>
									<td>{{ $setting->about_info_short }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection