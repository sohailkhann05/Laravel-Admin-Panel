@extends('layouts.admin')
@section('title','Testimonials')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Testimonials</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Testimonial deleted successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Testimonials List
					<a href="{{ route('testimonials.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Testimonial
	               	</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Customer</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<?php $sno = 1; ?>
								@forelse($testimonials as $testimonial)
									<tr>
										<td>{{ $sno++ }}</td>
										<td>{{ $testimonial->name }}</td>
										<td>
											<a href="{{ route('testimonials.show',$testimonial->id) }}" class="btn btn-sm btn-neutral">View</a>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="3">
											No record found.
										</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection