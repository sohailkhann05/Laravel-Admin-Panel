@extends('layouts.admin')
@section('title','Office Details')
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
	                  		<a href="{{ route('offices.index') }}">Offices</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $office->name }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					{{ $office->name }} - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('offices.edit',$office->office_slug) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Office</th>
									<td>{{ $office->name }}</td>
								</tr>
								<tr>
									<th>E-Mail</th>
									<td>{{ $office->email }}</td>
								</tr>
								<tr>
									<th>Phone</th>
									<td>{{ $office->phone }}</td>
								</tr>
								<tr>
									<th>Address</th>
									<td>{{ $office->address }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection