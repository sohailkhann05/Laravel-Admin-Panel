@extends('layouts.admin')
@section('title','Add Category')
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
	                	<li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
			<p class="grid-header">
				Category Details
				<button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#demo" style="float:right;">
				  <i class="mdi mdi-help-circle"></i>&nbsp; Help
				</button>
			</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/project-categories') }}" method="POST" enctype="multipart/form-data" onsubmit="return loadingBtn(this)" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Title</label>
									<small class="field-required"> *</small>
									<input type="text" class="form-control" name="title" placeholder="Category Title" required>
								</div>
								<div class="form-group">
									<label for="">Background Image</label>
									<small class="field-required"> *</small>
									<input type="file" class="form-control" name="background" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Logo</label>
									<small class="field-required"> *</small>
									<input type="file" class="form-control" name="icon" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Category</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<img src="{{ asset('uploads/project-category-demo.png') }}" class="img-responsive" style="border: 1px solid #777;">
      </div>
    </div>
  </div>
</div>

@endsection