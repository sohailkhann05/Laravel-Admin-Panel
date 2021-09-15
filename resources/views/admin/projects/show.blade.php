@extends('layouts.admin')
@section('title','Project Details')
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
	                  		<a href="{{ route('projects.index') }}">Projects</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					{{ $project->title }} - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('projects.edit',$project->project_slug) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Category</th>
									<td>{{ $project->category->title }}</td>
								</tr>
								<tr>
									<th>Project</th>
									<td>{{ $project->title }}</td>
								</tr>
								<tr>
									<th>Link</th>
									<td>{{ $project->link }}</td>
								</tr>
								<tr>
									<th>Description</th>
									<td>{{ $project->description }}</td>
								</tr>
								<tr>
									<th>Banner</th>
									<td>
										<img src="{{ asset('uploads/projects/'.$project->banner) }}" class="img-responsive" style="width: 600px; height: 400px;">
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