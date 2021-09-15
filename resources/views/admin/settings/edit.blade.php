@extends('layouts.admin')
@section('title','Update Setting')
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
	                  		<a href="{{ route('settings.index') }}">Settings</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Update Settings</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Setting Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/settings',$setting->setting_slug) }}" method="POST" enctype="multipart/form-data" onsubmit="return loadingBtn(this)">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Site Name</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="site_name" value="{{ $setting->site_name }}" required>
								</div>
								<div class="form-group">
									<label for="">Opening Day</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="opening_day" value="{{ $setting->opening_day }}" required>
								</div>
								<div class="form-group">
									<label for="">Opening Time</label>
									<small class="field-required"> *</small>
									<input type="time" class="form-control" name="opening_time" value="{{ $setting->opening_time }}" required>
								</div>
								<div class="form-group">
									<label for="">Phone Number</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="phone_number" value="{{ $setting->phone_number }}" required>
								</div>
								<div class="form-group">
									<label for="">Facebook Link</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="facebook_link" value="{{ $setting->facebook_link }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Site Logo</label>
									<small class="field-required"> * Can be empty, if old one is good.</small>
									<input type="file" class="form-control" name="site_logo">
								</div>
								<div class="form-group">
									<label for="">Closing Day</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="closing_day" value="{{ $setting->closing_day }}" required>
								</div>
								<div class="form-group">
									<label for="">Closing Time</label>
									<small class="field-required"> *</small>
									<input type="time" class="form-control" name="closing_time" value="{{ $setting->closing_time }}" required>
								</div>
								<div class="form-group">
									<label for="">E-Mail Address</label>
									<small class="field-required"> *</small>
									<input type="email" class="form-control" name="email_address" value="{{ $setting->email_address }}" required>
								</div>
								<div class="form-group">
									<label for="">Instagram Link</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="instagram_link" value="{{ $setting->instagram_link }}" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Short Info</label>
									<small class="field-required"> *</small>
									<textarea class="form-control" name="about_info_short" rows="2" required>{{ $setting->about_info_short }}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Location Address</label>
									<small class="field-required"> *</small>
									<textarea class="form-control" name="location_address" rows="2" required>{{ $setting->location_address }}</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">About Banner</label>
									<small class="field-required"> * Can be empty, if old one is good.</small>
									<input type="file" class="form-control" name="about_banner">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Fav Icon</label>
									<small class="field-required"> * Can be empty</small>
									<input type="file" class="form-control" name="fav_icon">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">
									Update Settings
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection