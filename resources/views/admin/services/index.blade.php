@extends('layouts.admin')
@section('title','Services')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Services</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Service deleted successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Services List
					<a href="{{ route('services.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Service
	               	</a>
	            </p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Title</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<?php $sno = 1; ?>
								@forelse($services as $service)
									<tr>
										<td>{{ $sno++ }}</td>
										<td>{{ $service->title }}</td>
										<td>
											<a href="{{ route('services.show',$service->service_slug) }}" class="btn btn-sm btn-neutral">View</a>
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