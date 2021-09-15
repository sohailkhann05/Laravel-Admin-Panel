@extends('layouts.admin')
@section('title','Offices')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Offices</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Offices List
					<a href="{{ route('offices.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Office
	               	</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Office</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Update</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								@forelse($offices as $office)
									<tr>
										<td>{{ $office->name }}</td>
										<td>{{ $office->email }}</td>
										<td>{{ $office->phone }}</td>
										<td>
											<a href="{{ route('offices.edit',$office->office_slug) }}" class="btn btn-sm btn-neutral">Edit</a>
						    			</td>
										<td>
											<a href="{{ route('offices.show',$office->office_slug) }}" class="btn btn-sm btn-neutral">View</a>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="5">
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