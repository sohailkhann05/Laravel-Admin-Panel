@extends('layouts.admin')
@section('title','Service Details')
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
	                	<li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					{{ $service->title }} - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('services.edit',$service->service_slug) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Service</th>
									<td>{{ $service->title }}</td>
								</tr>
								<tr>
									<th>Description</th>
									<td>{{ $service->description }}</td>
								</tr>
								<tr>
									<th>Icon</th>
									<td>
										<img src="{{ asset('uploads/services/'.$service->icon) }}" class="img-responsive" style="width: 300px; height: 300px;">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>		

@endsection