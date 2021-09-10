
@extends('layout')

@section('css')

@endsection

@section('content')
        <section role="main" class="content-body pb-0" > 
			<header class="page-header">
				<h2>Constituency</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>constituency</span></li>
					</ol>
				</div>
			</header>

			<section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
			
					<h2 class="card-title">Constituency</h2>
				</header>
				<div class="card-body">
					<div class="mb-3 col-lg-12 text-right"><a href="/Constituency/add" class="btn btn-success">Add</a></div>
					<table class="table table-responsive-md table-hover mb-0">
						<thead>
							<tr>
								<th width="10%">Constituency_id</th>
								<th width="15%">Constituency_type</th>
								<th width="15%">Constituency_code</th>
								<th width="30%">Constituency_name</th>
								<th width="15%">State</th>
								<th width="20%" colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse($constituencies as $constituency )
								<tr>
									<td width="10%">{{$constituency->Constituency_id}}</td>
									<td width="15%">{{$constituency->ctype_name}}</td>
									<td width="15%">{{$constituency->Constituency_code}}</td>
									<td width="30%">{{$constituency->Constituency_name}}</td>
									<td width="15%">{{$constituency->state_name}}</td>
									<td width="10%" ><a class="btn btn-primary" href="/Constituency/edit/{{ $constituency->Constituency_id }}">Edit</a></th>
									<td width="10%"><a class="btn btn-danger" data-toggle="modal" data-target="#modalBootstrap" href="#">Delete</a></td>
								</tr>

								<!-- Modal -->
								<div class="modal" id="modalBootstrap" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Are you sure?</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Are you sure that you want to delete this data?</p>
											</div>
											<div class="modal-footer">
												<form method="POST" action="/Constituency/delete/{{ $constituency->Constituency_id }}">@csrf @method('DELETE')<input class="btn btn-danger" type="submit" value="Comfirm"></form>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->

							@empty
								<tr>
									<td colspan="6" class="text-center">No data available</td>
								</tr>
							@endforelse
						</tbody>
					</table>
					
				</div>
			</section>
			

			

		</section>


        
@endsection

@section('script')
		<script src="{{asset('porto/vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('porto/vendor/pnotify/pnotify.custom.js')}}"></script>
@endsection