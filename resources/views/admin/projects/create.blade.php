@extends('layouts.admin')
@section('title','Add Project')
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
	                  		<a href="{{ route('projects.index') }}">Project</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Add Project</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Project added successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Project Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/projects') }}" method="POST" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Category</label>
									<small class="field-required"> *</small>
									<select class="form-control" name="project_category_id" required>
										<option value="">--Select--</option>
										@foreach($categories as $category)
											<option value="{{ $category->id }}">
												{{ $category->title }}
											</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="">Link</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="link" placeholder="Website Link" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Title</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="title" placeholder="Project Title" required>
								</div>
								<div class="form-group">
									<label for="">Select Banner</label>
									<small class="field-required"> *</small>
									<input type="file" class="form-control" name="banner" required>
								</div>
							</div>
						</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Description</label>
										<small class="field-required"> *</small>
										<textarea rows="3" class="form-control" name="description" placeholder="Description here..." required></textarea>
									</div>
								</div>
							</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Project</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection