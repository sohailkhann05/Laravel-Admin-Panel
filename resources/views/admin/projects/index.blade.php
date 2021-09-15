@extends('layouts.admin')
@section('title','Projects')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Projects</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Project deleted successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Projects List
					<a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Project
	               	</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Title</th>
									<th>Category</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<?php $sno = 1; ?>
								@forelse($projects as $project)
									<tr>
										<td>{{ $sno++ }}</td>
										<td>{{ $project->title }}</td>
										<td>{{ $project->category->title }}</td>
										<td>
											<a href="{{ route('projects.show',$project->project_slug) }}" class="btn btn-sm btn-neutral">View</a>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="4">
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