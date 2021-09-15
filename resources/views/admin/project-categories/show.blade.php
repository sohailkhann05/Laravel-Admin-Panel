@extends('layouts.admin')
@section('title','Category Details')
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
	                  		<a href="{{ route('project-categories.index') }}">Project Categories</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
	              	</ol>
	            </nav>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					{{ $category->title }} - Details
					{{-- <button type="submit" class="btn btn-sm btn-danger" style="float: right;"><i class="mdi mdi-delete"></i></button> --}}
					<a href="{{ route('project-categories.edit',$category->category_slug) }}" class="btn btn-sm btn-neutral" style="float: right;">Update</a>
				</p>
				<div class="item-wrapper">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Category</th>
									<td>{{ $category->title }}</td>
								</tr>
								<tr>
									<th>Icon</th>
									<td>
										<img src="{{ asset('uploads/categories/'.$category->icon) }}" class="img-responsive" style="width: 100px; height: 100px;">
									</td>
								</tr>
								<tr>
									<th>Background</th>
									<td>
										<img src="{{ asset('uploads/categories/'.$category->background) }}" class="img-responsive" style="width: 300px; height: 400px;">
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