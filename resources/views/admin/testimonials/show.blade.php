@extends('layouts.admin')
@section('title','Testimonial Details')
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
	                	<li class="breadcrumb-item active" aria-current="page">{{ $testimonial->name }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Testimonial - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('testimonials.edit',$testimonial->id) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Customer</th>
									<td>{{ $testimonial->name }}</td>
								</tr>
								<tr>
									<th>Feedback</th>
									<td>{{ $testimonial->feedback }}</td>
								</tr>
								<tr>
									<th>Photo</th>
									<td>
										<img src="{{ asset('uploads/testimonials/'.$testimonial->picture) }}" class="img-responsive" style="width: 150px; height: 150px;">
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