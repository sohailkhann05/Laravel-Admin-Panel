@extends('layouts.admin')
@section('title','Clients')
@section('content')
	
	<div class="row">
		<div class="col-12">
			<div class="grid">
	            <nav aria-label="breadcrumb">
	              	<ol class="breadcrumb has-arrow" style="margin-bottom: 0px;">
	                	<li class="breadcrumb-item">
	                  		<a href="{{ route('admin.dashboard') }}">Dashboard</a>
	                	</li>
	                	<li class="breadcrumb-item active" aria-current="page">Clients</li>
	              	</ol>
	            </nav>
		    </div>
		@if(session('success'))
			<p class="alert alert-success">Client logo deleted successfully.</p>
		@endif
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<p class="grid-header">
					Clients List
					<a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary has-icon" style="float: right;">
	                	<i class="mdi mdi-plus"></i>
	               		Client
	               	</a>
				</p>
				<div class="item-wrapper">
					<div class="row" style="padding: 10px;">
						@forelse($clients as $client)
						<div class="col-md-5" style="margin: 10px; padding: 5px; border: 1px solid #f2f2f2;">
							<form action="{{ url('/admin/clients',$client->id) }}" method="POST">
								@csrf
								@method('DELETE')
						        <button type="submit" class="btn btn-sm btn-danger" style="float: right;">x</button>
						    </form>
					        <img class="img-responsive" src="{{ asset('uploads/clients/'.$client->logo) }}">
						</div>
						@empty
							<div class="col-md-12">
								<p>No record found.</p>
							</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection