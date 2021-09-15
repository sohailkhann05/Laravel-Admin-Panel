@extends('layouts.admin')
@section('title','Add Client')
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
						<a href="{{ route('clients.index') }}">Clients</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Add Client</li>
				</ol>
			</nav>
		</div>
		@if(session('success'))
			<p class="alert alert-success">Client logo added successfully.</p>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-lg-12 equel-grid">
		<div class="grid">
			<p class="grid-header">Client Details</p>
			<div class="grid-body">
				<div class="item-wrapper">
					<form action="{{ url('/admin/clients') }}" method="POST" enctype="multipart/form-data" onsubmit="return loadingBtn(this)">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Logo</label>
									<small class="field-required"> *</small>
									<input type="file" name="logo" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
						<div class="row">
							<div class="col-md-12" id="loading-btn">
								<button type="submit" class="btn btn-sm btn-primary">Add Client</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection