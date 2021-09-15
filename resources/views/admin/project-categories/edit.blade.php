@extends('layouts.admin')
@section('title','Update Category')
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
		@if(session('success'))
			<p class="alert alert-success">Project Category updated successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Category Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/project-categories',$category->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Title</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="title" value="{{ $category->title }}" required>
								</div>
								<div class="form-group">
									<label for="">Background Image</label>
									<small class="field-required"> * Can be null.</small>
									<input type="file" class="form-control" name="background">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Logo</label>
									<small class="field-required"> * Can be null.</small>
									<input type="file" class="form-control" name="icon">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Update Category</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection